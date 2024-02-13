# Improving Passwords Using Emojis

This application was created in order to carry out an experiment meant to investigate the usability and security of emoji passwords. This experiment was carried out as a part of a group project for the [Human Centered Security](https://www.gla.ac.uk/coursecatalogue/course/?code=COMPSCI5060) course at the University of Glasgow.

## Project structure
This project follows a typical [Laravel app structure](https://laravel.com/docs/10.x/structure). In broad strokes, most of the backend can be found within the `app` and `database` directories, routes can be found within the `routes` directory, and most of the frontend can be found within the `resources` directory.

* `app/` requests, controllers, models, middleware, and service providers
* `bootstrap/` framework files
* `config/` configuration files
* `database/` migrations, factories, and seeders
* `public/` entry point of the main-app
* `node_modules/` main-app JavaScript packages (generated by the `npm install` command)
* `resources/` stylesheets, components, pages, and templates
* `routes/` route definitions
* `storage/` stored files
* `tests/` test suite stubs
* `vendor/` PHP packages (generated by the `composer install` command)

## Pre-requisite technologies

* PHP (download [here](https://www.php.net/downloads.php)).
* Composer (download [here](https://getcomposer.org/doc/00-intro.md)).
* Node.js (download [here](https://nodejs.org/en/download)).
* MySQL Server (download [here](https://dev.mysql.com/downloads/mysql/)).

## Build instructions

> In the following steps, you will need to create a database, a user, and a password for that user. These instructions assume that these are named `hcs_database`, `hcs_user`, and `hcs_password` respectively. Please replace these placeholders with your own values when you encounter them.

1. Clone the project.
2. Open the MySQL CLI and run the following commands:
```
CREATE DATABASE hcs_database;
ALTER DATABASE hcs_database CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
CREATE USER 'hcs_user'@'localhost' IDENTIFIED BY 'hcs_password';
GRANT ALL PRIVILEGES ON hcs_database.* to hcs_user@localhost;
FLUSH PRIVILEGES;
```
3. In your file manager, navigate to where you cloned the project and create a `.env` file.
4. Copy the contents of `.env.example` into `.env`.
5. In your preferred IDE, update the following fields in your new `.env` file:
```
DB_DATABASE=hcs_database
DB_USERNAME=hcs_user
DB_PASSWORD=hcs_password
```
6. In your preferred CLI, navigate to where you cloned the project and run the following commands:
```
composer install
npm install
npm run reseed
npm run start
```
7. In your preferred web browser, navigate to `http://127.0.0.1:8000`.

