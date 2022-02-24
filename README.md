
## About UrL Shortner

Url shortner is a tool for generating short URL linked to your original url

 ## Getting Started
 To install this web application, there are some certain critaria that must be met:

 1. Install composer [`composer`](https://getcomposer.org/)
 2. Install [`nodejs`](https://nodejs.org) and [`npm`](https://npmjs.com)
 3. Create a database
 4. PHP 8.0 or higher

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

Create a database, and set the database variable in the .env file:

```sh
DB_CONNECTION=pgsql                # or mysql
DB_HOST=127.0.0.1
DB_PORT=5432                       # or 3306 for mysql
DB_DATABASE=url_shortner           # database name
DB_USERNAME=your_db_name           # database password
DB_PASSWORD=your_db_password
```

Then migrate the database table using:

```sh
$ php artisan migrate
```

Install all node dependencies, [`nodejs`](https://nodejs.org) and [`npm`](https://npmjs.com) are required to install and use this web application:

```sh
$ npm install && npm run dev
```

After all the installation is done, serve the application using:

```sh
$ php artisan serve
```
and point to http://localhost:8000