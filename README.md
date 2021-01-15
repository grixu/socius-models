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
php artisan vendor:publish --tag=socius-migrations-description
php artisan vendor:publish --tag=socius-migrations-product
php artisan vendor:publish --tag=socius-migrations-customer
php artisan vendor:publish --tag=socius-migrations-warehouse
php artisan vendor:publish --tag=socius-migrations-operator

# Or all at once:
php artisan vendor:publish --tag=socius-migrations-all
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
