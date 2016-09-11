---
title: 'Блог на Laravel 5 (часть 4) Создание Front End'
published: true
taxonomy:
    tag:
        - Laravel
jscomments:
    active: true
summary:
    enabled: '1'
    format: short
    delimiter: '@cut'
---

В этой части мы сделаем все файлы отображения для отправки ответа от контроллеров, созданных в предыдущем уроке. @cut
Кастомизируем `app.blade.php`

Сменим файл `resources/views/app.blade.php` следующим образом:

```html
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog Demo</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">DevUserLab Laravel Demo</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="{{ url('/') }}">Главная</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li>
              <a href="{{ url('/auth/login') }}">Логин</a>
            </li>
            <li>
              <a href="{{ url('/auth/register') }}">Регистрация</a>
            </li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @if (Auth::user()->can_post())
                <li>
                  <a href="{{ url('/new-post') }}">Добавить пост</a>
                </li>
                <li>
                  <a href="{{ url('/user/'.Auth::id().'/posts') }}">Мои посты</a>
                </li>
                @endif
                <li>
                  <a href="{{ url('/user/'.Auth::id()) }}">Мой профиль</a>
                </li>
                <li>
                  <a href="{{ url('/auth/logout') }}">Выйти</a>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      @if (Session::has('message'))
      <div class="flash alert-info">
        <p class="panel-body">
          {{ Session::get('message') }}
        </p>
      </div>
      @endif
      @if ($errors->any())
      <div class='flash alert-danger'>
        <ul class="panel-body">
          @foreach ( $errors->all() as $error )
          <li>
            {{ $error }}
          </li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2>@yield('title')</h2>
              @yield('title-meta')
            </div>
            <div class="panel-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p>Copyright © 2015 | <a href="http://devuserlab.com">Dev User Lab</a></p>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
```

Здесь мы добавили ссылки на верхнее меню. Этот базовый файл для всех остальных файлов отображения. Этот файл использует систему шаблонирования. 

### Создание отображения главной страницы Home

Отображение главной - это файл (home.blade.php), который выводит список постов с коротким описанием, мета-тегами и пагинацией (5 постов на страницу). Этот файл расширяет app.blade.php. Смените код home.blade.php на следующий:

```php
@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')
@if ( !$posts->count() )
Ещё нет постов. Ввойдите и напишите новый пост!
@else
<div class="">
  @foreach( $posts as $post )
  <div class="list-group">
    <div class="list-group-item">
      <h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
          @if($post->active == '1')
          <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Редактировать пост</a></button>
          @else
          <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Редактировать черновик</a></button>
          @endif
        @endif
      </h3>
      <p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
    </div>
    <div class="list-group-item">
      <article>
        {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Подробнее</a>') !!}
      </article>
    </div>
  </div>
  @endforeach
  {!! $posts->render() !!}
</div>
@endif
@endsection
```

### Создание поста:

Создайте новую папку с именем posts всередине папки views и создайте файл с именем create.blade.php всередине этой папки. Этот файл рендерится функцией create() всередине класса PostController. Этот файл содержит форму для создания нового поста. Код этого файла:

```php
@extends('app')
@section('title')
Add New Post
@endsection
@section('content')
<form action="/new-post" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
  </div>
  <div class="form-group">
    <textarea name='body'class="form-control">{{ old('body') }}</textarea>
  </div>
  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
  <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
</form>
@endsection
```
csrf_token() - для кросссайтовой безопасности. Функция old() возвращает старые данные, когда форма получает ошибки и новый пост не может быть добавлен к базе данных.

> Мы добавим текстовый редактор tinymce для создания поста и отредактируем формы поста в следующей части.

### Вывод поста:

Просто создайте новый файл show.blade.php в папке posts для вывода целого поста с комментариями к этому посту. Этот файл отображения рендерится с помощью функции show() в классе PostController. Код этого файла:

```php
@extends('app')
@section('title')
  @if($post)
    {{ $post->title }}
    @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
      <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->slug)}}">Редактировать пост</a></button>
    @endif
  @else
    Страница не существует
  @endif
@endsection
@section('title-meta')
<p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} Автор: <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
@endsection
@section('content')
@if($post)
  <div>
    {!! $post->body !!}
  </div>    
  <div>
    <h2>Оставить комментарий</h2>
  </div>
  @if(Auth::guest())
    <p>Залогинтесь, чтоб комментрировать</p>
  @else
    <div class="panel-body">
      <form method="post" action="/comment/add">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="on_post" value="{{ $post->id }}">
        <input type="hidden" name="slug" value="{{ $post->slug }}">
        <div class="form-group">
          <textarea required="required" placeholder="Введите свой комментарий" name = "body" class="form-control"></textarea>
        </div>
        <input type="submit" name='post_comment' class="btn btn-success" value = "Опубликовать"/>
      </form>
    </div>
  @endif
  <div>
    @if($comments)
    <ul style="list-style: none; padding: 0">
      @foreach($comments as $comment)
        <li class="panel-body">
          <div class="list-group">
            <div class="list-group-item">
              <h3>{{ $comment->author->name }}</h3>
              <p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
            </div>
            <div class="list-group-item">
              <p>{{ $comment->body }}</p>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    @endif
  </div>
@else
404 ошибка
@endif
@endsection
```

Переменный $post и $comments передаются от функции show().

### Редактирование поста:

Для редактирования поста мы отправляем форму от функции edit() в классе PostController. Эта форма хранится в posts/edit.blade.php. Давайте создадим новый файл edit.blade.php в папке resources/views/posts и запишем туда этот код:

```php
@extends('app')
@section('title')
Редактировать пост
@endsection
@section('content')
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
```