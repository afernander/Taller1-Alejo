[![Build Status](https://img.shields.io/travis/gothinkster/laravel-realworld-example-app/master.svg)](https://travis-ci.org/gothinkster/laravel-realworld-example-app) [![Gitter](https://img.shields.io/gitter/room/realworld-dev/laravel.svg)](https://gitter.im/realworld-dev/laravel) [![GitHub stars](https://img.shields.io/github/stars/gothinkster/laravel-realworld-example-app.svg)](https://github.com/gothinkster/laravel-realworld-example-app/stargazers) [![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)
# Getting started

## Installation

This are the instructions to set and run my proyect

Clone the repository

    git clone https://github.com/afernander/Taller1-Alejo
Or dowload zip an extract in your www folder

Open the proyect in wamp or xamp www directory

Open terminal in the proyect directory and Install all the dependencies using composer and npm

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file located in the root of the proyect

    cp .env.example .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=talleralejo
    DB_USERNAME=root
    DB_PASSWORD=

Generate a new application key

    php artisan key:generate

Start mysql and create the database

    mysql -u root
    > CREATE DATABASE taller1; }
 In case of mysql command not working, open localhost/phpmyadmin/ in your browser and create a data base called "talleralejo"

Run the database migrations (**Set the database connection in .env before migrating**) this will create all the tables in the database

**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate

You  start the local development server or go to you http://localhost/alejo/public/

    php artisan serve


  
