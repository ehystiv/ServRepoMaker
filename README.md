# Service/Repository class generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ehystiv/servrepomaker.svg?style=flat-square)](https://packagist.org/packages/ehystiv/servrepomaker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ehystiv/servrepomaker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ehystiv/servrepomaker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ehystiv/servrepomaker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ehystiv/servrepomaker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ehystiv/servrepomaker.svg?style=flat-square)](https://packagist.org/packages/ehystiv/servrepomaker)

This package add commands to generate a simple Service/Repository class.


## Installation

You can install the package via composer:

```bash
composer require --dev ehystiv/servrepomaker
```


## Usage

```bash
php artisan make:repository {repository_name} # Generate repository
php artisan make:service {service_name} # Generate service
```

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
