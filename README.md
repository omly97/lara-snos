# Lara-SNOS

Since Laravel 10


### Installation Steps

#### Update your composer.json
Add the below content in composer.json
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/omly97/lara-snos.git"
        }
    ]
```

#### Install
```
composer require omly97/lara-snos
```

#### Service provider
Update your `app/config.php` by adding this package service provider
```
Omly97\Snos\SnosServiceProvider::class
```
