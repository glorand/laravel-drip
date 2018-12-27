<p align="center">
<img height="90px" alt="drip" src="https://user-images.githubusercontent.com/883989/50478538-685da980-09da-11e9-92b3-6b2351dfd60e.png">
</p>

<p align="center">
<img height="90px" alt="laravel" src="https://user-images.githubusercontent.com/883989/50478539-685da980-09da-11e9-8251-18003e023ac9.png">
</p>

<h6 align="center">
    Laravel 5.7 integration for <a href='https://github.com/glorand/drip'>Drip PHP</a> package
</h6>

The package requires PHP 7.1.3+ and follows the FIG standards PSR-1, PSR-2 and PSR-4 
to ensure a high level of interoperability between shared PHP.

Bug reports, feature requests, and pull requests can be submitted by following our [Contribution Guide](CONTRIBUTING.md).

## Documentation
Documentation for Drip PHP package can be found [here](https://github.com/glorand/drip/blob/1.0.4/README.md).

## Installation <a name="installation"></a>
```
$ composer require glorand/laravel-drip
```

```
{
    "require": {
        "glorand/laravel-drip": "^1.0"
    }
}
```

## Set the Service Provider and Facade alias
After installing the package, open your Laravel config file located at ``config/app.php`` and add the following lines.

In the $providers array add the following service provider for this package.
```php
\Glorand\Drip\Laravel\DripServiceProvider::class,
```

In the $aliases array add the following facade for this package.
```php
'Drip' => Glorand\Drip\Laravel\DripFacade::class,
```

## Config - Environment variables
Update your **.env** file
```dotenv
DRIP_ACCOUNT_ID=your-account_id
DRIP_API_KEY=your-api-key
DRIP_USER_AGENT=custom-agent
```

## Usage
For usage, please refer to the Drip PHP package documentation, located [here](https://github.com/glorand/drip).

### Contract
Use **``namespace Glorand\Drip\Laravel\DripContract``** in your controller or service constructor

### Facade
Just use the Laravel facade alias **``Drip::``** instead of the native call [**``$drip->``**](https://github.com/glorand/drip).

### Helper
Just use the helper function **``drip()``** instead of the native call [**``$drip->``**](https://github.com/glorand/drip).

## Changelog <a name="changelog"></a>
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing <a name="contributing"></a>
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License <a name="license"></a>
The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
