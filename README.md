# property_analytics
This is a Laravel API Project which demonstrate the CRUD functionality 
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Authentication for API Access

The API uses Laravel Passport to authorize the access for any Endpoint. - https://laravel.com/docs/7.x/passport
```sh
composer require laravel/passport
```
## LogViewer

URL: https://github.com/ARCANEDEV/LogViewer
### Installation
> Note: PHP 7 and Laravel 5.x or higher are required.

```sh
composer require arcanedev/log-viewer
```

### Laravel
Publish the config file by running:

```bash
php artisan log-viewer:publish
```
```bash
php artisan log-viewer:check
```
This will publish the config and translations files.

## Documentation Generator

URL: https://laravel-apidoc-generator.readthedocs.io/en/latest/documenting.html
### Installation
> Note: PHP 7 and Laravel 5.5 or higher are required.

```sh
composer require mpociot/laravel-apidoc-generator
```

### Laravel
Publish the config file by running:

```bash
php artisan vendor:publish --provider="Mpociot\ApiDoc\ApiDocGeneratorServiceProvider" --tag=apidoc-config
```
This will create an `apidoc.php` file in your `config` folder.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
