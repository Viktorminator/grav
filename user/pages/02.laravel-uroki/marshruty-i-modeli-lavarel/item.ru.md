---
title: 'Блог на Laravel 5 (часть 2)  Маршруты и модели'
published: true
date: '09-09-2016 00:28'
metadata:
    keywords: 'laravel, маршруты ларавел, модели ларавел'
    description: 'Создание маршрутов и моделей в Laravel, создание простого блога'
taxonomy:
    tag:
        - Laravel
jscomments:
    active: true
summary:
    enabled: '1'
    format: short
content:
    items: '@self.children'
    limit: '5'
    order:
        by: date
        dir: desc
    pagination: '1'
    url_taxonomy_filters: '1'
---

Создадим маршруты для нашего приложения. В маршрутах свяжем урлы с контроллерами с помощью Route class. Route class содержит функции get(), post(), delete(), put(), all() и match() для различных типов запросов от пользователей. Здесь мы будем использовать только get() и post() функции для запросов GET и POST. Смените app/Http/routes.php на этот код.

```php
<?php
/*
|--------------------------------------------------------------------------
| Маршруты приложения
|--------------------------------------------------------------------------
|
| Здесь вы можете зарегистрировать все маршруты для приложения.
| Это очень просто. Просто укажите URI, на которые она должна отвечать 
| и дайте её контроллеру для вызова, когда запрошен этот URI.
|
*/
Route::get('/','PostController@index');
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
//authentication
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);
// проверка залогиненного пользователя
Route::group(['middleware' => ['auth']], function()
{
 // показ новой пост формы
 Route::get('new-post','PostController@create');
 // сохранение нового поста
 Route::post('new-post','PostController@store');
 // редактирование формы поста
 Route::get('edit/{slug}','PostController@edit');
 // обновление поста
 Route::post('update','PostController@update');
 // удаление поста
 Route::get('delete/{id}','PostController@destroy');
 // вывод всех постов пользователю
 Route::get('my-all-posts','UserController@user_posts_all');
 // вывод пользовательских черновиков
 Route::get('my-drafts','UserController@user_posts_draft');
 // добавление комментариев
 Route::post('comment/add','CommentController@store');
 // удаление комментария
 Route::post('comment/delete/{id}','CommentController@distroy');
});
// пользовательские профили
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// вывод списка постов
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// вывод одного поста
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
```

Функции get() и post() берут два аргумента. Первый - это url, который запрашивается в браузерах. Второй - это функция или имя функции (направленной на функцию определённую в классе контроллера). 
Мы будем использовать контроллеры. Контроллеры определены в папке app/Http/Controllers. Мы сделаем эти контроллеры в следующей части. Для более детальной информациии читайте Документацию про базовые контроллеры в Ларавел 5 и продвинутые контроллеры в Ларавел 5.
PostController@index обозначает функцию index() в классе PostController. Мы создадим класс PostController в следующей части. 
Для аутентификации (строка 19) мы используем встроенную систему ларавел. Функция controller() связывает урлы прямо с именем функции, как например, auth/login с login() функцией класса AuthController (определённого в app/Http/Controllers/AuthController.php). В строке 25 мы используем auth middleware для ограничения урлов только для залогиненных пользователей. Middleware обеспечивает удобный механизм фильтрации HTTP запросов к вашему приложению. 

## Создание моделей:

###1) Модель Posts:

Создадим модели для наших таблиц, чтобы мы могли использовать eloquent ORM. Модели взаимодействуют с базой данных удобным образом. Создайте два файла в папке app с именем Posts.php и Comments.php. В Posts.php запишите следующий код:

```php
<?php namespace App;
use Illuminate\Database\Eloquent\Model;
// сущность класа Posts будет ссылаться на таблицу posts в базе данных
class Posts extends Model {
  // запрещает изменение колонок
  protected $guarded = [];
  // у постов множество комментариев
  // возвращает все комментарии к посту
  public function comments()
  {
    return $this->hasMany('App\Comments','on_post');
  }
  // возвращает сущность пользователя, который является автором этого поста
  public function author()
  {
    return $this->belongsTo('App\User','author_id');
  }
}
```
Класс Posts связан с таблицей постов в базе данных. Переменная $guarded используется для предотвращения вставки(обновления) колонок таблицы. Мы хотели бы использовать все колонки, поэтому массив $guarded пуст. Функция comments() связывает комментарии с постами через связь один-к-многим. Функция author() возвращает автора поста. Это связь многие-к-одному.

### 2) Модель Comments:

Аналогично сделаем модель к таблице comments.

```php
<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Comments extends Model {
  // таблица комментариев в базе данных
  protected $guarded = [];
  // прокомментрировавший пользователь
  public function author()
  {
    return $this->belongsTo('App\User','from_user');
  }
  // возвращает пост любого комментария
  public function post()
  {
    return $this->belongsTo('App\Posts','on_post');
  }
}
```
### 3) Модель пользователя - User

Смените код `app/User.php` на:
```php
<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {
  use Authenticatable, CanResetPassword;
  /**
   * База данных используемая моделью.
   *
   * @var string
   */
  protected $table = 'users';
  /**
   * Массово назначаемые аттрибуты.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password'];
  /**
   * Исключённые аттрибуты из JSON формы модели.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];
  // у одного пользователя множество постов
  public function posts()
  {
    return $this->hasMany('App\Posts','author_id');
  }
  // у пользователя много комментариев
  public function comments()
  {
    return $this->hasMany('App\Comments','from_user');
  }
  public function can_post()
  {
    $role = $this->role;
    if($role == 'author' || $role == 'admin')
    {
      return true;
    }
    return false;
  }
  public function is_admin()
  {
    $role = $this->role;
    if($role == 'admin')
    {
      return true;
    }
    return false;
  }
}
```
Здесь мы добавили четыре функции к классу пользователя User. Функции posts() и comments() связывают пользователя с постами и комментариями. Функция can_post() проверяет может ли пользователь публиковать пост или нет. Функция  is_admin() проверяет имеет пользователь роль admin или нет.

