# Simple site traffic analytics for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arnehendriksen/laravel-simple-stats.svg?style=flat-square)](https://packagist.org/packages/arnehendriksen/laravel-simple-stats)
[![Total Downloads](https://img.shields.io/packagist/dt/arnehendriksen/laravel-simple-stats.svg?style=flat-square)](https://packagist.org/packages/arnehendriksen/laravel-simple-stats)

This package uses a simple middleware to track page requests, and stores them in your application's database. You can
easily exclude ips, envs, uris, and user agents, by adding them to the simple-stats config file after it's published.

## Installation

You can install the package via composer:

```bash
composer require arnehendriksen/laravel-simple-stats
```

The package will automatically register itself.

You can publish the config file with:

```bash
php artisan vendor:publish --provider="arnehendriksen\LaravelSimpleStats\SimpleStatsServiceProvider"
```

Next, run the migrations:

```bash
php artisan migrate
```

To begin tracking page requests, add the following middleware to your 'web' middleware group:

```php
\arnehendriksen\LaravelSimpleStats\Middleware\Stats::class,
```