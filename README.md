# Dick MenuManager

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Add/edit/delete/reorder/nest menu items interface for Laravel's Dick Admin.

## Install

Via Composer

### Step 1. Install via Composer

``` bash
$ composer require dick/menumanager
```

### Step 2. Add the service provider 

In your config/app.php, add this to the providers array:

``` bash
'Dick\MenuManager\MenuManagerServiceProvider',
```

### Step 3. Run the migration

``` bash
$ php artisan migrate --path=vendor/dick/menumanager/src/database/migrations
```

## Usage

Add a menu element for it in your config/admin.php file:

``` php
[
    'label' => "Menu Items",
    'route' => 'admin/menu-item',
    'icon' => 'fa fa-bars',
],
```

Or just try at **your-project-domain/admin/menu-item**

## Screenshots

See http://usedick.com for screenshots, more information and documentation.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

// TODO

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email hello@tabacitu.ro instead of using the issue tracker.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dick/MenuManager.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dick/MenuManager/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/dick/MenuManager.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/dick/MenuManager.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dick/MenuManager.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dick/MenuManager
[link-travis]: https://travis-ci.org/dick/MenuManager
[link-scrutinizer]: https://scrutinizer-ci.com/g/dick/MenuManager/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/dick/MenuManager
[link-downloads]: https://packagist.org/packages/dick/MenuManager
[link-author]: https://github.com/tabacitu
[link-contributors]: ../../contributors
