---
title: 'Блог на Laravel 5 (часть 1) Создание базы данных'
published: true
metadata:
    keywords: 'база данных ларавел, ларавел урок, база данных laravel'
    description: 'В данном уроке Ларавел для блога создадим базу данных, произведём миграции и создадим пару таблиц'
taxonomy:
    tag:
        - Laravel
jscomments:
    active: true
process:
    markdown: true
    twig: true
visible: true
---

> Если вы столкнулись с проблемами, задавайте вопросы в комментариях.

Разделы этой серии статей:

- Простой блог на Lavarel 5 – Вступление
- Простой блог на Lavarel 5 (часть 1) - Создание базы данных
- Простой блог на Lavarel 5 (часть 2) -  Маршруты и модели
- Простой блог на Lavarel 5 (часть 3) -  Контроллеры
- Простой блог на Lavarel 5 (часть 4) -  Строим клиентскую часть
- Простой блог на Lavarel 5 (часть 5) - Подключаем (добавляем) редактор tinyMCE и профиль пользователя

В этой статье мы создадим таблицы базы данных для того чтобы сохранять информацию. Для генерации таблиц будем использовать конструкторы Migrations и Schema.
Начнем с настройки базы данных. Для этого нужно изменить  файл с расширением .env.
 .env - это скрытый файл в корневой папке приложения. (в данном случае в папке блога)

```yaml
DB_HOST=localhost
DB_DATABASE=your_database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password
```
Настройте свою базу в blog >> config >> database.php изменив значение по умолчанию.

```php
<?php
return [
...
...
// set database
default' => 'mysql',

...
...
```

Для других настроек почитайте Настройка базы данных на базе Lavarel 5
Теперь произведем миграции, используя следующие команды:
```bash
php artisan make:migration posts
php artisan make:migration comments
```

В blog >> database >> migrations появятся два новых файла с окончаниями posts.php и comments.php. Обратите внимание,  что до этого там уже были два файла. Первый (2014_10_12_000000_create_users_table.php) генерирует таблицу для пользователей в базе данных. Второй ( 2014_10_12_100000_create_password_resets_table.php ) - таблицу для восстановления пароля.
Создаем таблицу для сообщений (постов)
Откройте файл, который был создан с помощью миграции, с окончанием posts.php в папке migrations и вставьте этот код. Этот код создает таблицу под названием posts в базе данных.

```php
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Posts extends Migration {
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
   // blog table
  Schema::create('posts', function(Blueprint $table)
  {
    $table->increments('id');
    $table -> integer('author_id') -> unsigned() -> default(0);
    $table->foreign('author_id')
        ->references('id')->on('users')
        ->onDelete('cascade');
    $table->string('title')->unique();
    $table->text('body');
    $table->string('slug')->unique();
    $table->boolean('active');
    $table->timestamps();
  });
 }
 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
   // drop blog table
   Schema::drop('posts');
 }
}
```

Migration это основной класс laravel, который используется для контроля версий базы данных. Этот класс содержит две функции up() и down(). Функция up() выполняется при выполнении миграции. Функция down() отменяет функцию  up() и выполняется тогда, когда нужно откатить последнюю миграцию или перезапустить базу данных.
Schema это еще один класс Lavarel, который создает и изменяет таблицы БД.

```php

Schema::create('posts', function(Blueprint $table)
   {
     $table->increments('id');
     $table -> integer('author_id') -> unsigned() -> default(0);
     $table->foreign('author_id')
         ->references('id')->on('users')
         ->onDelete('cascade');
     $table->string('title')->unique();
     $table->text('body');
     $table->string('slug')->unique();
     $table->boolean('active');
     $table->timestamps();
   });
```
В этой части кода мы вызываем функцию create(), которая принимает 2 аргумента. Первый аргумент - это имя таблицы в которой мы работаем, второй - функция замыкания(closure), создающая столбцы в этой таблице.$table - это пример такой таблицы. Laravel предусматривает встроенные функции для типов столбцов в БД. Например, increments('id') создает столбцы с именем 'id', которое является основным ключем(автоматически возрастает). Чтобы ознакомиться более детально прочтите  migrations and schema builder.
Создаем таблицу для комментариев:
Как и раньше вставьте этот код в файл с окончанием commets.php в папке migrations.

```php
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Comments extends Migration {
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
   //id, on_blog, from_user, body, at_time
   Schema::create('comments', function(Blueprint $table)
   {
     $table->increments('id');
     $table -> integer('on_post') -> unsigned() -> default(0);
     $table->foreign('on_post')
         ->references('id')->on('posts')
         ->onDelete('cascade');
     $table -> integer('from_user') -> unsigned() -> default(0);
     $table->foreign('from_user')
         ->references('id')->on('users')
         ->onDelete('cascade');
     $table->text('body');
     $table->timestamps();
   });
 }
 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
   // drop comment
   Schema::drop('comments');
 }
}
```

Таблица пользователя:
Миграция для таблицы пользователя уже написана в файле 2014_10_12_000000_create_users_table.php. Но нам требуется еще добавить роли пользователю, поэтому просто вставьте одну строчку в этот файл. 

```

$table->string('password', 60);
// add this one line
$table->enum('role',['admin','author','subscriber'])->default('author');
$table->rememberToken();
```

Мигрируем в БД:
Создадим таблицы в БД используя команду:

```
php artisan migrate
```
Эта команда сгенерирует все таблички в БД. Вот мы и создали таблицы в базе данных для нашего приложения. После миграции попробуйте перейти по этой ссылке http://localhost:8000/auth/log