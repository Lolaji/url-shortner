<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p> -->

## About EC-Business

A tool for shortning your URL

<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
 -->

 ## Getting Started
 To install this web application, there are some certain critaria that must be met:

 1. Install composer [`composer`](https://getcomposer.org/)
 2. Install [`nodejs`](https://nodejs.org) and [`npm`](https://npmjs.com)
 3. Create a database

## Installation

First open your terminal and cd into the root directory of the source code, then install all the PHP dependencies using [`composer`](https://getcomposer.org/) by running the following:

```sh
$ composer install
```

Create .env file and copy all the content of .env.example in it by running:

```sh
$ cp .env.example .env
```

generate the app key by running:

```sh
$ php artisan key:generate
```



Then install all node dependencies, [`nodejs`](https://nodejs.org) and [`npm`](https://npmjs.com) are required to install and use this web application:

```sh
$ npm install && npm run dev
```

