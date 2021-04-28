# Socius Models

This package contains models for Socius API and all apps using Socius and need to keep local data copy.

## Installation

You can install the package via composer:

```bash
composer require grixu/socius-models
```

## Usage

Models are divided into 5 modules:
* product
* customer
* operator
* warehouse
* description

Of course, some models have cross-module relationships. Some of them are very natural like: descriptions have foreign key
to products (it's obvious). We created migrations, models and factories to be much flexible as possible.
So we only assume that tables in each module exists - models just checking table exists on cross-module relationships.

### Publishing migrations

By default, package do not loading migrations to your application. You must do it manually - it gives you
power to control table structure - in case if you want to add some custom fields. If you do so,
please remember about extending Model and overwrite default `$fillable`.

To publish migrations:
```bash
# php artisan vendor:publish --tag=socius-migrations-model-name
# Eg:
php artisan vendor:publish --tag=socius-migrations-branch

# Or all at once:
php artisan vendor:publish --tag=socius-migrations
```

### Generating models & factories

You can also create local, customizable version both models & their factories. To do that just type:
```bash
# php artisan socius:model-name ModelNameInLocalApp
# Eg:
php artisan socius:product MyProduct
```

You also could generate them with custom namespace for model & factory:

```bash
php artisan socius:product MyProduct Custom\\Namespace\\Models Custom\\Namespace\\Factories
```

Same way with factories:

```bash
# php artisan socius:model-name-factory ModelNameInLocalApp
# Eg:
php artisan socius:product-factory MyFactory

# With custom namespace:
php artisan socius:product-factory MyFactory Custom\\Namespace\\Factories Custom\\Namespace\\Models
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mg@grixu.dev instead of using the issue tracker.

## Credits

- [Mateusz Gostański](https://github.com/grixu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
