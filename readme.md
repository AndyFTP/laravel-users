# Laravel-Users | A Laravel Users Management [Package](https://packagist.org/packages/jeremykenedy/laravel-users)

[![Total Downloads](https://poser.pugx.org/jeremykenedy/laravel-users/d/total.svg)](https://packagist.org/packages/jeremykenedy/laravel-users)
[![Latest Stable Version](https://poser.pugx.org/jeremykenedy/laravel-users/v/stable.svg)](https://packagist.org/packages/jeremykenedy/laravel-users)
[![License](https://poser.pugx.org/jeremykenedy/laravel-users/license.svg)](https://packagist.org/packages/jeremykenedy/laravel-users)

## Compatibility changes for 5.2

I have updated this package to be compatible with Laravel 5.2 and added the admin middleware to be required to gain access to the user management pages.

Here is a snippet for the admin middleware:
```
<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{

    public function handle($request, Closure $next)
    {
        if(!$request->user()->hasRole('admin')){
            return redirect('/'); //for unauthorized users
        };

        return $next($request);
    }
}
```

in `\App\Http\Kernell.php` add this:

```
    protected $routeMiddleware = [
        
        'admin' => \App\Http\Middleware\Admin::class
        
    ];
```

now make sure you are admin so u can access the user management pages.

## Introduction

A Users Management [Package](https://packagist.org/packages/jeremykenedy/laravel-users) that includes all necessary routes, views, models, and controllers for a user management dashboard and associated pages for managing Laravels built in user scaffolding.
Built for Laravel 5.2, 5.3, and 5.4+.

Note: for Laravel 5.2 you will need to use `v0.9.0`

## Requirements

* [Laravel 5.2, 5.3, or 5.4 or newer](https://laravel.com/docs/installation)

   Example new project creation command:

    ```laravel new laravel-users-example```

* [Laravel Authentication Scaffolding](https://laravel.com/docs/authentication)

   Authentication installation commands:

    ```php artisan make:auth```
    ```php artisan migrate```

## Installation

1. From your projects root folder in terminal run:

    Laravel 5.3 < use:

    ```
        composer require jeremykenedy/laravel-users
    ```

    Laravel 5.2 > use:
    ```
        composer require jeremykenedy/laravel-users:0.9.0
    ```

2. Register the package with laravel in `config/app.php` under `providers` with the following:

   ```
      Collective\Html\HtmlServiceProvider::class,
      jeremykenedy\laravelusers\LaravelUsersServiceProvider::class,
   ```

3. Register the dependencies aliases with laravel in `config/app.php` section under `aliases` with the following:

    ```
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
    ```

4. Publish the packages language files by running the following from your projects root folder:

    ```
        php artisan vendor:publish --tag=laravelusers
    ```

## Routes

* ```/users```
* ```/users/{id}```
* ```/users/create```
* ```/users/{id}/edit```

## Required Packages
(included in this package)

* [laravelcollective/html](https://packagist.org/packages/laravelcollective/html)

## Screenshots

![Show Users](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/show-users.jpg)
![Show User](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/show-user.jpg)
![Edit User](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/edit-user.jpg)
![Edit User Password](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/edit-user-pw.jpg)
![Create User](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/create-user.jpg)
![Create User Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/save-user-modal.jpg)
![Delete User Modal](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/delete-user-modal.jpg)
![Error Create](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/error-create.jpg)
![Error Update](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/error-update.jpg)
![Error Delete](https://s3-us-west-2.amazonaws.com/github-project-images/laravel-users/error-delete.jpg)

## License

Laravel-Users | A Laravel Users Management Package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
