---
title: 'Блог на Laravel 5 (часть 5) Добавление TinyMCE и профиль пользователя'
published: true
metadata:
    keywords: 'laravel, user profile, TinyMCE'
    description: 'Добавляем TinyMCE и создаём профиль пользователя'
taxonomy:
    tag:
        - Laravel
jscomments:
    active: true
---

Это финальная часть серии "Создание блога на Laravel". В этом уроке мы вначале добавим tinymce к нашему приложению, далее мы добавим функции к классу UserController для вывода профиля, постов и черновиков к определённому пользователю, и наконец мы создадим фронтэнд для страницы пользователя и это будет конец нашей короткой серии уроков по созданию Блога на Ларавел.

### Добавление tinyMCE к постам:

Сначала загрузите tinymce по ссылке http://www.tinymce.com/download/download.php и извлеките его в папку public/js. Теперь добавьте его к вашему прилоежнию. Смените edit.blade.php следующим образом:

```html
@extends('app')
@section('title')
Редактировать пост
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>
<form method="post" action='{{ url("/update") }}'>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
  <div class="form-group">
    <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
  </div>
  <div class="form-group">
    <textarea name='body'class="form-control">
      @if(!old('body'))
      {!! $post->body !!}
      @endif
      {!! old('body') !!}
    </textarea>
  </div>
  @if($post->active == '1')
  <input type="submit" name='publish' class="btn btn-success" value = "Обновить"/>
  @else
  <input type="submit" name='publish' class="btn btn-success" value = "Опубликовать"/>
  @endif
  <input type="submit" name='save' class="btn btn-default" value = "Сохранить как черновик" />
  <a href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Удалить</a>
</form>
@endsection
Вот мы добавили tinyMCE javascript к тегу textarea для генерации текстового редактора. Также смените create.blade.php:

```html
@extends('app')
@section('title')
Добавить новый пост
@endsection
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>
<form action="/new-post" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input required="required" value="{{ old('title') }}" placeholder="Введите название" type="text" name = "title"class="form-control" />
  </div>
  <div class="form-group">
    <textarea name='body'class="form-control">{{ old('body') }}</textarea>
  </div>
  <input type="submit" name='publish' class="btn btn-success" value = "Опубликовать"/>
  <input type="submit" name='save' class="btn btn-default" value = "Сохранить черновик" />
</form>
@endsection
```

### Загрузка изображения:

Во-первых скачайте по ссылке https://github.com/vikdiesel/justboil.me. Извлеките содержимое архива и переименуйте извлечённую папку на jbimages. Переместите эту папку в blog/public/js/tinymce/plugins. Создайте ещё одну папку с именем images в blog/public. Это местоположение по-умолчанию, где будут храниться изображения. Если вам нужно сменить такое место, то можете это сделать в файле конфигурации config.php в папке jbimages (которую переместили в директорию plugins). Обратите внимание, что в этом конфигурационном файле путь оносителен к доменному имени и в ларавел нашей директорией домена является blog/public, а не родительская директория блога. Например, если вы хотите загрузить изображение в папку blog/public/images/uploads, тогда вам нужно поменять config.php (в папке jbimages) следующим образом:

$config['img_path'] = '/images/uploads'; // Относительно к доменному имени
Наконец смените код для tinymce в edit.blade.php и create.blade.php вот так:

tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    });
Обратите внимание, что мы добавляем только ещё один плагин jbimages (последним в массиве плагинов) и один тулбар с именем jbimages (последним в массиве тублара). Теперь у нас есть опция загрузки изображения. Если вы хотите задать больше настроек в конфигурации, например как размеры изображений, разрешённые типы и др, тогда измените файл config.php в папке jsimages.

## Бекэнд пользовательского профиля:

Смените UserController.php вот так:

```php
<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Posts;
use Illuminate\Http\Request;
class UserController extends Controller {
  /*
   * Вывод активных постов отдельного пользователя
   * 
   * @param int $id
   * @return view
   */
  public function user_posts($id)
  {
    //
    $posts = Posts::where('author_id',$id)->where('active',1)->orderBy('created_at','desc')->paginate(5);
    $title = User::find($id)->name;
    return view('home')->withPosts($posts)->withTitle($title);
  }
  /*
   * Вывод всех постов отдельного пользователя
   * 
   * @param Request $request
   * @return view
   */
  public function user_posts_all(Request $request)
  {
    //
    $user = $request->user();
    $posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
    $title = $user->name;
    return view('home')->withPosts($posts)->withTitle($title);
  }
  /*
   * Вывод черновиков постов текущего активного пользователя
   * 
   * @param Request $request
   * @return view
   */
  public function user_posts_draft(Request $request)
  {
    //
    $user = $request->user();
    $posts = Posts::where('author_id',$user->id)->where('active',0)->orderBy('created_at','desc')->paginate(5);
    $title = $user->name;
    return view('home')->withPosts($posts)->withTitle($title);
  }
  /**
   * профиль пользователя
   */
  public function profile(Request $request, $id) 
  {
    $data['user'] = User::find($id);
    if (!$data['user'])
      return redirect('/');
    if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
      $data['author'] = true;
    } else {
      $data['author'] = null;
    }
    $data['comments_count'] = $data['user'] -> comments -> count();
    $data['posts_count'] = $data['user'] -> posts -> count();
    $data['posts_active_count'] = $data['user'] -> posts -> where('active', '1') -> count();
    $data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
    $data['latest_posts'] = $data['user'] -> posts -> where('active', '1') -> take(5);
    $data['latest_comments'] = $data['user'] -> comments -> take(5);
    return view('admin.profile', $data);
  }
}
```

> Обратите внимание, что я использую вместе функции withPost() и withTitle(). Laravel содержит динамические функции для отправки данных в шаблонах. Функция withPost($post) эквивалентна with('post', $post) и функция withTitle($title) эквивалентна with('title', $title).

## Создание фронтэнда профиля:

Для вывода постов мы используем отображение home.blade.php без изменений. Нам только нужно создать отображение для профиля, которое возвращается функцией profile(). Создайте новую папку в папке views с названием admin и создайте файл с именем profile.blade.php. Добавьте следующий код к этому файлу:

```php
@extends('app')
@section('title')
{{ $user->name }}
@endsection
@section('content')
<div>
  <ul class="list-group">
    <li class="list-group-item">
      Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td{
            padding: 3px 8px;
          }
        </style>
        <tr>
          <td>Всего постов</td>
          <td> {{$posts_count}}</td>
          @if($author && $posts_count)
          <td><a href="{{ url('/my-all-posts')}}">Показать все</a></td>
          @endif
        </tr>
        <tr>
          <td>Опубликованные посты</td>
          <td>{{$posts_active_count}}</td>
          @if($posts_active_count)
          <td><a href="{{ url('/user/'.$user->id.'/posts')}}">Показать все</a></td>
          @endif
        </tr>
        <tr>
          <td>Постов в Черновиках</td>
          <td>{{$posts_draft_count}}</td>
          @if($author && $posts_draft_count)
          <td><a href="{{ url('my-drafts')}}">Показать все</a></td>
          @endif
        </tr>
      </table>
    </li>
    <li class="list-group-item">
      Всего комментариев {{$comments_count}}
    </li>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><h3>Последние посты</h3></div>
  <div class="panel-body">
    @if(!empty($latest_posts[0]))
    @foreach($latest_posts as $latest_post)
      <p>
        <strong><a href="{{ url('/'.$latest_post->slug) }}">{{ $latest_post->title }}</a></strong>
        <span class="well-sm">От {{ $latest_post->created_at->format('M d,Y \a\t h:i a') }}</span>
      </p>
    @endforeach
    @else
    <p>У вас нет ещё постов.</p>
    @endif
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><h3>Последние комментарии</h3></div>
  <div class="list-group">
    @if(!empty($latest_comments[0]))
    @foreach($latest_comments as $latest_comment)
      <div class="list-group-item">
        <p>{{ $latest_comment->body }}</p>
        <p>On {{ $latest_comment->created_at->format('M d,Y \a\t h:i a') }}</p>
        <p>On post <a href="{{ url('/'.$latest_comment->post->slug) }}">{{ $latest_comment->post->title }}</a></p>
      </div>
    @endforeach
    @else
    <div class="list-group-item">
      <p>У вас нет комментариев. Ваши последние 5 комментариев будут выведены здесь</p>
    </div>
    @endif
  </div>
</div>
@endsection
```

Это и есть наше приложение. Если вы что-то недопоняли, то пишите внизу комментарии с вопросами и предложения по улучшению урока.