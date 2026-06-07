# Service/Repository class generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ehystiv/servrepomaker.svg?style=flat-square)](https://packagist.org/packages/ehystiv/servrepomaker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ehystiv/servrepomaker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ehystiv/servrepomaker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ehystiv/servrepomaker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ehystiv/servrepomaker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ehystiv/servrepomaker.svg?style=flat-square)](https://packagist.org/packages/ehystiv/servrepomaker)

Adds Artisan commands to generate Service and Repository classes from stubs.

Supports Laravel 11, 12, and 13.

## Installation

```bash
composer require --dev ehystiv/servrepomaker
```

## Usage

```bash
php artisan make:service UserService       # generates App\Http\Services\UserService.php
php artisan make:repository UserRepository # generates App\Http\Repositories\UserRepository.php
```

Both commands prompt for the class name if omitted.

## Configuration

Publish the config file to customise the default namespaces:

```bash
php artisan vendor:publish --tag="servrepomaker-config"
```

This creates `config/servrepomaker.php`:

```php
return [
    'service_namespace'    => 'App\\Http\\Services',
    'repository_namespace' => 'App\\Http\\Repositories',
];
```

Change the values to match your project structure. The generated files will be placed accordingly.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Stefano Bichicchi](https://github.com/ehystiv)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
