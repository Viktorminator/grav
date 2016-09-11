---
title: 'Блог на Ларавел 5 (часть 3) Контроллеры'
published: true
date: '09-09-2016 11:01'
metadata:
    keywords: 'Laravel, блог на Ларавел, контроллеры Laravel'
    description: 'Создание контроллеров для блога на Ларавел'
taxonomy:
    tag:
        - Laravel
jscomments:
    active: true
---

Сделаем контроллеры для нашего приложения. Будем использовать следующие команды для генерирования контроллеров:
```bash
php artisan make:controller UserController
php artisan make:controller PostController
php artisan make:controller CommentController
```
Эти команды создадут три файла в папке app/Http/Controllers.

## PostController:

Мы будем отправлять файлы отображения (html текст) после обработки запросов. Мы сделаем эти файлы отображения в следующем уроке. Откройте файл app/Http/Controllers/PostController.php.

## Вывести все посты:

На главной странице нам нужно показать 5 постов с пагинацией. Функция index() класса PostController - это обработка запроса в корень сайта (localhost:8000). Давайте обновим функцию index():

public function index()
  {
    // сделать выборку 5 постов из базы данных, активных и последних
    $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(5);
    // заголовок страницы
    $title = 'Последние посты';
    // вывод шаблона home.blade.php из папки resources/views
    return view('home')->withPosts($posts)->withTitle($title);
  }
## Создание нового поста:

Для создания нового поста нам нужно отправить форму на запрос пользователя. Во-первых, мы проверим или у данного пользователя есть разрешения для постинга или нет (только авторы и администратор может публиковать посты) далее мы будем возвращать форму для создания поста. Обновите функцию create() следующим образом:

```php
public function create(Request $request)
  {
    // если пользователь может публиковать автор или администратор
    if($request->user()->can_post())
    {
      return view('posts.create');
    }    
    else 
    {
      return redirect('/')->withErrors('У вас нет достаточных прав для написания поста');
    }
  }
```
Пока что мы не создали отображение 'post.create'. Это отображение содержит html код формы. Мы создадим это отображение в следующих уроках.

## Хранение постов:

Когда пользователь отправит форму, нам нужно проверить её и сохранить. Для валидации, мы используем PostFormRequest. Создайте файл с именем PostFormRequest.php в app/Http/Requests с этим кодом:

```php
<?php namespace App\Http\Requests;
use App\Http\Requests\Request;
use App\User;
use Auth;
class PostFormRequest extends Request {
  /**
   * Определить авторизирован ли пользователь делать этот запрос.
   *
   * @return bool
   */
  public function authorize()
  {    
    if($this->user()->can_post())
    {
      return true;
    }
    return false;
  }
  /**
   * Получить правила валидации, которые применяются к запросу
   *
   * @return array
   */
  public function rules()
  {
    return [
      'title' => 'required|unique:posts|max:255',
      'title' => array('Regex:/^[A-Za-z0-9 ]+$/'),
      'body' => 'required',
    ];
  }    
}
```
Функция authorize() проверяет или у пользователя есть права для отправки формы. Если пользователь имеет права для постинга. Правила валидации определены функцией rules(). Множественные правила одинаковых данный (таких как название разделяются (|).

Мы будем использовать эту валидацию класса PostController. Обновите функцию магазина store() с этим кодом.
```php
public function store(PostFormRequest $request)
  {
    $post = new Posts();
    $post->title = $request->get('title');
    $post->body = $request->get('body');
    $post->slug = str_slug($post->title);
    $post->author_id = $request->user()->id;
    if($request->has('save'))
    {
      $post->active = 0;
      $message = 'Пост успешно сохранён';            
    }            
    else 
    {
      $post->active = 1;
      $message = 'Пост опубликован успешно';
    }
    $post->save();
    return redirect('edit/'.$post->slug)->withMessage($message);
  }
```

Также не забывайте включать PostFormRequest в PostController.php. Обновите верхнюю секцию PostController.php:
```php
<?php namespace App\Http\Controllers;
use App\Posts;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
class PostController extends Controller {
// другой код/функии ниже
```
Выведите отдельные посты с комментариями:
```php
public function show($slug)
  {
    $post = Posts::where('slug',$slug)->first();
    if(!$post)
    {
       return redirect('/')->withErrors('запрошенная страница не найдена');
    }
    $comments = $post->comments;
    return view('posts.show')->withPost($post)->withComments($comments);
  }
```
Эта функция принимает псевдоним как аргумент и в 3 строке делается выборка поста из базы данных. Если пост существует, тогда делается выборка комментариев. эта связь между моделью Post и комментариями определена в функции comments() в модели Post.

## Редактирование поста:

Теперь мы будем отправлять форму для редактирования поста:

```php
public function edit(Request $request,$slug)
  {
    $post = Posts::where('slug',$slug)->first();
    if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
      return view('posts.edit')->with('post',$post);
    return redirect('/')->withErrors('у вас нет достаточных прав');
  }
```

В строке 3 мы получаем пост из базы данных и в строке 4 мы проверяем достаточность прав делающего запрос пользователя (администратора или автора поста).

## Обновление поста:

Мы будем получать эту форму для редактирования и будем обновлять базу данных.

```php
public function update(Request $request)
  {
    //
    $post_id = $request->input('post_id');
    $post = Posts::find($post_id);
    if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    {
      $title = $request->input('title');
      $slug = str_slug($title);
      $duplicate = Posts::where('slug',$slug)->first();
      if($duplicate)
      {
        if($duplicate->id != $post_id)
        {
          return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
        }
        else 
        {
          $post->slug = $slug;
        }
      }
      $post->title = $title;
      $post->body = $request->input('body');
      if($request->has('save'))
      {
        $post->active = 0;
        $message = 'Post saved successfully';
        $landing = 'edit/'.$post->slug;
      }            
      else {
        $post->active = 1;
        $message = 'Post updated successfully';
        $landing = $post->slug;
      }
      $post->save();
           return redirect($landing)->withMessage($message);
    }
    else
    {
      return redirect('/')->withErrors('у вас нет достаточных прав');
    }
  }
```

## Удаление поста:

Финальная функция PostController это destroy(). Она удаляет пост. Только автор или администратор имеет право удалить пост.

```php
public function destroy(Request $request, $id)
  {
    //
    $post = Posts::find($id);
    if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    {
      $post->delete();
      $data['message'] = 'Пост успешно удалён';
    }
    else 
    {
      $data['errors'] = 'Неправильная операция. У вас нет достаточных прав';
    }
    return redirect('/')->with($data);
  }
```

## Контроллер комментариев CommentController:

Для простоты мы определили только один метод для создания комментариев. Для добавления других функций, вы можете определить больше функций к CommentController совсем как мы добавили к контроллеру PostController.

```php
<?php namespace App\Http\Controllers;
use App\Posts;
use App\Comments;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CommentController extends Controller {
  public function store(Request $request)
  {
    //on_post, from_user, body
    $input['from_user'] = $request->user()->id;
    $input['on_post'] = $request->input('on_post');
    $input['body'] = $request->input('body');
    $slug = $request->input('slug');
    Comments::create( $input );
    return redirect($slug)->with('message', 'Comment published');     
  }
}
```
К этому моменту мы не добавляем какой-либо код к контроллеру _UserController_. Мы будем использовать этот контроллер для вывода постов и черновиков отдельного автора и также для создания профиля пользователей. Мы определим этот контроллер в 5й части этой серии уроков.