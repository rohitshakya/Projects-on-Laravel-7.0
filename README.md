# Laravel-7.0
Project based on laravel 7.0
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

### How to create and serve the laravel project
* [Link to learn laravel from scratch](https://laracasts.com/series/laravel-6-from-scratch/)
* Create a project: first setup path for composer, ie `c:/composer` in path variable.  
* Navigate where to create project in cmd, for example htdocs, type `composer create-project --prefer-dist laravel/laravel project-name`  
* how to start: `set the variable path, open system properties->advance system settings->environment variables->new path->C:/xampp/php` 
* open cmd navigate to the project folder and type `php artisan serve` to start the server.
* how to manage database-> navigate to .env file and change the settings and reset settings database.config file
* `public`: the wonder folder, to integrate any website or project just paste it into public folder and copy the initial file in view folder as welcome.blade.php  
* layout.blade.php: the wonder file, draw the basic structure(CSS) of project here and use wherever you want.
* Learnt use of (@extends('abc'),@section('content'),@endsection) for layout.blade.php
* Learnt Migration for database, make:controller etc.
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

