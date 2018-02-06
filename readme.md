#Simple Breadcrumbs package for Laravel

##How to install
###1. Place these values to your `composer.json` file:
```json
...
"repositories": [
        { "type": "vcs", "url": "git@gitlab.com:drahos.istvan/laravel-breadcrumbs.git" }
      ],
...
```
###2. require the package
```json
"drahosistvan/laravel-breadcrumbs": "dev-master"
```

###3. Install
Run `composer update` command, to install the package.

###4. publish
Publish the configuration file with `php artisan vendor:publish` command

##How to use

`$breadcrumbs` variable is available from the view.
