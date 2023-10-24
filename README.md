# This is my package date-picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sajjadgol/date-picker.svg?style=flat-square)](https://packagist.org/packages/sajjadgol/date-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sajjadgol/date-picker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sajjadgol/date-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sajjadgol/date-picker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sajjadgol/date-picker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sajjadgol/date-picker.svg?style=flat-square)](https://packagist.org/packages/sajjadgol/date-picker)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require sajjadgol/date-picker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="date-picker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="date-picker-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="date-picker-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$persianDatePicker = new Sajjadgol\PersianDatePicker();
echo $persianDatePicker->echoPhrase('Hello, Sajjadgol!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sajjadg](https://github.com/sajjadgol)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
