# saf-laravel-toolkit

A development toolkit for SAF's Laravel Developer

## Get started

```$xslt
$ composer require toanna/saf-laravel-toolkit
```

## Commands

### Initialize folder structure

```
$ php artisan saf:init
```

Folder structure:

```$xslt
/app
    /Abstraction
    /Business
    /BusinessService
    /Common
        /CircuitBreaker
        /DomainModels
        /Exceptions
        /ExternalConfig
        /Logging
    /Dependency
        /ExternalServices
        /Repositories
    /Providers
    /Representation
        /Console
        /Http
            /Controllers
                /Api
                /Auth
            /Middleware
            /Requests
            Kernel.php
```

### Creating Commands

Create an Abstraction Interface to `app/Abstraction/`:
```
$ php artisan saf:abstraction ExternalServiceInterface/IFileUploader
```

Create a Business Logic Class to `app/Business/`:
```
$ php artisan saf:business CreateFileBL
```

Create a Business Service Class to `app/BusinessService/`:
```
$ php artisan saf:business_service CreateFileBS
```

Create a Controller Class to `app/Representation/Http/`:
```
$ php artisan saf:controller TestController
```

Create an API Controller Class to `app/Representation/Http/Api`:
```
$ php artisan saf:api_controller FileController
```

Create a Dependency Class to `app/Dependency/`:
```
$ php artisan saf:dependency Repositories/SQLFileCreator
```

Create a Domain Model Class to `app/Common/DomainModels`:
```
$ php artisan saf:domain_model File
```

Create an Eloquent ORM Class to `app/Dependency/Repositories/Eloquent/`:
```
$ php artisan saf:eloquent FileEloquent
```

Create an Exception Class to `app/Common/Exceptions/`:
```
$ php artisan saf:exception ValidationException
```

Create a Form Request Class to `app/Representation/Http/Requests/`:
```
$ php artisan saf:request CreateFileRequest
```

Create a Resource to `app/Representation/Http/Resources/`:
```
$ php artisan saf:resource
```

Create a Artisan Command to `app/Representation/Console/Commands/`:
```
$ php artisan saf:console AbstractionMakeCommand
```

## Common Libraries

### Elastic Logger

Example in `app/config/logging.php`:
```$xslt
'stack' => [
    'driver' => 'stack',
    'channels' => ['daily', 'elastic'],
],

'elastic' => [
    'driver' => 'custom',
    'via' => Toanna\SAFLaravelToolkit\Common\Logging\ElasticLogger::class,
    'host' => 'localhost',
    'port' => 9200,
    'level' => 'debug'
],
```

## Contributors

- Thắng Lê <thang.le@saf.com.vn>
- Toàn Nguyễn <toan.nguyen@saf.com.vn>
