# Laravel Tinypass REST API client

This package is a wrapper of 
[Tinypass REST API Client](http://github.com/la-voz/tinypass)
package PHP Class for Laravel Framework

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require la-voz/laravel-tinypass
```
```php
// config/app.php
<?php

return [
    'providers' => [
        // ...
        LaVoz\LaravelTinypass\Provider\LaravelTinypassServiceProvider::class
        // ...
    ]
];
```
