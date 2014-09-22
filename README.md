# League of Legends wrapper for Laravel 4

lolapi-4-laravel is a simple laravel 4 service provider (wrapper) for [paquettg/leaguewrap](https://github.com/paquettg/leaguewrap)
which aims to assist application development that depends on the League of Legends API easily.

---

- [Installation](#installation)
- [Registering the Package](#registering-the-package)
- [Configuration](#configuration)
- [Usage](#usage)
- [Basic usage](#basic-usage)
- [Usage examples](#usage-examples)

## Installation

Add lolapi-4-laravel to your composer.json file:

```
"require": {
  "josephting/lolapi-4-laravel": "dev-master"
}
```

Use composer to install this package.

```
$ composer update
```

### Registering the Package

Register the service provider within the ```providers``` array found in ```app/config/app.php```:

```php
'providers' => array(
	// ...

	'Josephting\LolApi\LolApiServiceProvider',
)
```

Add an alias within the ```aliases``` array found in ```app/config/app.php```:


```php
'aliases' => array(
	// ...

	'LolApi'          => 'Josephting\LolApi\Facade\LolApi',
)
```

## Configuration

There are two ways to configure lolapi-4-laravel.
You can choose the most convenient way for you.
You can use package config file which can be
generated through command line by artisan (option 1) or
you can simply create a config file called ``lolapi-4-laravel.php`` in
your ``app\config\`` directory (option 2).

#### Option 1

Create configuration file for package using artisan command

```
$ php artisan config:publish josephting/lolapi-4-laravel
```

#### Option 2

Create configuration file manually in config directory ``app/config/lolapi-4-laravel.php`` and put there code from below.

```php
<?php

return array(

    'api_key' => ''

);
```

### Credentials

Add your credentials to ``app/config/packages/josephting/lolapi-4-laravel/config.php`` or ``app/config/lolapi-4-laravel.php`` (depending on which option of configuration you choose)

## Usage

### Basic usage

You can simply load up the API with:

```php
$api = LolApi:Api();
```

It is possible to override the ApiKey in config by passing in a parameter:

```php
$api = LolApi:Api('YOUR_API_KEY');
```

### Usage examples:

For more examples go [here](https://github.com/paquettg/leaguewrap#simple-example)

