# Symfony 6 Boilerplate

This repository contains a dockerised installation of Symfony 6

## Contents

- [What it includes](#what-it-includes)

- [Getting Started](#getting-started)
  - [1. Prerequisites](#1-prerequisites)
  - [2. Clone the Repository](#2-clone-the-repository)
  - [3. ENV Changes](#3-env-changes)
  - [4. Docker Setup](#4-docker-setup)
  - [4.5 What has just happened?](#45-what-has-just-happened)
  - [5. Installing Dependencies](#5-installing-dependencies)
  - [6. Initialising the Database](#6-initialising-the-database)
  - [7. Lets login](#7-lets-login)
  - [7.5 If the previous step failed](#75-if-the-previous-step-failed)
  - [8. Time to start coding!](#8-time-to-start-coding)
  - [9. Build for Production](#9-build-for-production)
  
- [Super Quick Start](#super-quick-start)
  - [1. Change the ENV APP_SECRET](#1-change-the-env-app-secret)
  - [2. Build and run the docker](#2-build-and-run-the-docker)
  - [2. Install Dependencies](#2-install-dependencies)
  - [3. Database Setup](#3-database-setup)
  - [4. Time to start coding... Faster!](#4-time-to-start-coding-faster)
  - [6. Production Build](#6-production-build)

## What it includes
Dashkit, a Bootstrap theme for creating bespoke dashboard quickly. 

Webpack Encore (Symfony's webpack integration) for compiling SCSS into one CSS file and all JavaScript/TypeScript into one JS file 

User Management and security features including 'Forgot Password' routes and the ability to login via username or password.

## Getting Started

This is our recommend way to use the docker, but if you know what you're doing, go ahead and ignore this :)

### 1. Prerequisites

#### Docker

If you don't already have docker, you can download it on all the main three platforms (MacOS, Windows and Linux) from [Docker's Website](https://www.docker.com/products/docker-desktop/).

### [Optional] Node JS / Node Package Manager
[Node Package Manager (npm)](https://nodejs.org/en/download/): You don't *need* this as it is installed within the docker. This allows you to enter the docker container (like a virtual machine, or through SSH) and install any packages that you may need.

However, if you have npm installed you may not need to enter the docker. And overall npm is just a great tool!

Note: If you've download NodeJS in the past, npm is included with that

#### [Optional] Composer

[Composer](https://getcomposer.org/download/): This is also included in the docker, so the above applies. Composer can be finicky with versioning so using the docker often results in a more consistent experience.

[Git](https://git-scm.com/downloads): Used for version control

### 2. Clone the Repository

Clone the repo into a directory of your choice. We recommend using [GitKraken](https://www.gitkraken.com/), but if you are using the command line use the follow command:

```bash
$ git clone https://harryh31@bitbucket.org/lykeltd/symfony-6-boilerplate.git [directory]
```

Replace `[directory]` with the directory you want to clone the repo into. 

You'll need an [SSH key setup](https://support.atlassian.com/bitbucket-cloud/docs/set-up-an-ssh-key/) to pull, as this is currently a private repository

### Setup Git

I prefer to remove the git folder in the directory `rm -R .git` and then `git init` to create a new git instance. But you can also, fork the repository to have a similar effect.

### 3. ENV Changes

We need to change one part of the Symfony docker ENV to make it unique.

Generate a random passcode (we use [this one](https://passwordsgenerator.net/), well the first result on Google) and then change the `APP_SECRET` in `symfony/.env`

Note: An environment file, or .env file contains information about your current deployment. You would usually not commit this to git as it often contains sensitive information such as API keys or database credentials

### 4. Docker Setup

Open a terminal inside the repository directory and run the following commands:

On a side note: `docker compose` is docker but many containers put together, like they're on the same network.

And then run the following commands:

Downloads and builds the docker containers ready to be run
```bash
$ docker compose build
```

Run the container (Adding `-d` to the end of the command will run the container in the background)
```bash
$ docker-compose up -d
```

### 4.5 What has just happened?

If you've followed the last 3 steps correctly. You should now have four dockers up and running.

To view the dockers running you can run: 
```bash
$ docker-compose ps
```

Or if you're using docker desktop, you can view it in the Docker Desktop GUI

The dockers that are running are:
- db: This is the database (using port 3306)
- php: This is where the PHP application is running (using port 9001)
- phpmyadmin: This is a web interface for interacting with the database. You can see database tables and individual rows through here.
  - To get to this, go to [http://localhost:8080](http://localhost:8080) by default anyway
- nginx: The web server that serves the application (using port 80 or 443 if using HTTPS and SSL)

### 5. Installing Dependencies

This is where we will enter the PHP container and install Composer/PHP and NPM/JS dependencies.

Enter the container through this command:
```bash
$ docker compose exec php sh
```

From there you'll see something that looks like this:
```shell
/var/www/symfony # 
````

You can then install your dependencies by running:
```shell
$ composer install
$ npm install 
```

### 6. Initialising the Database

At this point the application is almost ready to go, but at the moment our database is empty. To make it usable and accessible, we need to run our doctrine migrations.

**Doctrine**: This is the ORM (Object Relational Mapper) that allows us to interact with the database through objects in PHP.
**Migration**: This is how doctrine stores database changes and schema/layout. It's a way to make sure that the database is always in sync with the entities.

To bring our database up to date, run the following command:
```shell
$ bin/console doctrine:migrations:migrate
```

Note: If you would like to get out of the container, you can use the `exit` command

### 7. Lets Login

In this boilerplate, we have a predefined route for creating an admin when there are no users available. As, usually that's really annoying to do.

Head on over to [http://symfony.localhost/generate_admin](http://symfony.localhost/generate_admin) to generate an admin user. This will then redirect you back to the login page.

You can log in with:

```
Username: lyke
Password: 0161e2efCD
```

And if everything works, you should be on the homepage!

#### 7.5 If the previous step failed

This has only happened to me once, but I've included this just in case anyone else needs to use this.

* Go to the phpMyAdmin container (localhost:8080 by default)
* Go to the `User` table
* Click insert at the top

```
username: lyke
users: ["ROLE_ADMIN"]
password: $2y$13$gzVeeO2kCWQNY6wPdvV9Ce7j4NLRRxONexDhhSTukCI/DzWHwoxvq
email: team@lyke.co.uk
```

Try logging with the credentials in step 6, and you should be able to login.

### 8. Time to start coding!

Your docker is ready to and all the dependencies are installed.

If you are editing PHP files, your code will magically work. But if you are editing SCSS or TypeScript, you will need to use one of the following commands from the PHP container:
```shell
$ npm run dev
$ npm run watch
```

There is a lot even in this simple-ish boilerplate. Below, you can find what is in all (of the important) files and folders for the docker.

### 9. Build for Production

If you're ready to build the website to production, you can build the static files (JavaScript and CSS) by using:
```shell
$ npm run build
```

Nothing needs to be done to cache Twig files, this is done automatically. And PHP files do not need to be cached.

#### How it works...

This command will minify your files and put them in the `/symfony/public/assets` folder ready for production. The `<link>` and `<script>` tags will automatically be added by symfony by using Webpack Encore functions in Twig, as shown below.
```shell
{{ encore_entry_link_tags('app') }}
...
{{ encore_entry_script_tags('app') }}
```


#### Docker Folders and Files

- `db`: All the files and folders for the database, you shouldn't need to edit these as you can either use phpMyAdmin or through Doctrine
- `logs`: contains the logs (for mostly nginx)
- `nginx`: contains the nginx (web server) configuration
- `php-fpm`: contains the php-fpm (where PHP is run) configuration
- `symfony`: contains the Symfony 6 project, this is where we'll spend the most time
- `docker-compose.yml`: The configuration for the docker project. 

#### Symfony Folders and Files


Inside the symfony folder the main folders are:
- `assets`: These are your frontend assets. Mostly JavaScript/TypeScript, SCSS and images.
- `src`: Symfony's MVC (model-view-controller) structure. This includes Controllers (where routes/pages, forms and entities are defined)
- `templates`: Twig template files, these are rendered usually by the controller.
- `public`: This is what the web server (nginx) serves.
  - The `assets` folder inside is generated by webpack from the other assets folder
  - An `index.php` file is also in the folder which serves as an entry point to the website

Along with the above, there are some folders that are generated automatically (and aren't committed to git):
- `node_modules`: Contains the JavaScript node modules from npm, created when you run `npm install` or `npm i`
- `var`: Contains the cache and logs for Symfony
- `vendor`: Contains Composer (PHP's main package manager) packages

The files in the route of the Symfony directory include:
- `.env`: Files about your current environment, a few examples include
  - Database connection credentials
  - API keys for composer packages
  - The current environment (dev, prod, etc)
- `composer.json`: The composer.json file, this is used by Composer to know what packages to install
- `composer.lock`: Similar to composer.json but helps with compatibility between multiple computers. All versions are saved in this file, such as in the composer.json you may Symfony version 6.0.* (meaning any version 6.0.0 to 6.0.99 could be installed) but in the composer.lock it may be version 6.0.5
- `package.json`: The package.json file, this is used by npm to know what packages to install
- `package-lock.json`: Similar to composer.lock but for npm
- `tsconfig.json`: The configuration for TypeScript, this mostly won't need to be changed as TypeScript -> JavaScript completion is handled by Webpack Encore
- `webpack.config.js`: The configuration file for webpack, it is used to combine many files into a few. A few examples of what it can do:
  - Convert preprocessed CSS such as SCSS/SASS (Sassy CSS) into a single CSS file
  - Convert TypeScript into JavaScript
  - Combine all the JavaScript files into a single file

## Super Quick Start

If you don't need a longer version of the guide, then here is a quick start guide only limited by your internet connection and reading ability.

I'm assuming you have [docker installed](#1-prerequisites), have cloned/forked the repository and git is setup at this point.

### 1. Change the ENV APP_SECRET

Generate a random passcode (we use [this one](https://passwordsgenerator.net/)) and then change the `APP_SECRET` in `symfony/.env`

### 2. Build and run the docker

Run the following commands to start the docker:
```bash
$ docker compose build
$ docker-compose up -d
```

### 3. Install Dependencies

Enter the PHP docker container by running
```bash
$ docker-compose exec php sh
```

And then install the Composer and NPM packages:
```bash
$ composer install
$ npm i
```

### 4. Database Setup

Run the doctrine migrations command to bring the schema up to date:
```shell
$ bin/console doctrine:migrations:migrate
```

And then create the admin user by going to `http://symfony.localhost/generate_admin`

If that didn't work, add it manually by following step [7.5 If the previous step failed](#75-if-the-previous-step-failed) in the Getting Started guide.

### 5. Time to start coding... Faster!

Make sure to watch your JavaScript code by running
```shell
$ npm run watch
```

And you're done! Happy coding!

### 6. Production Build

Build your TypeScript and SCSS files ready for production
```shell
$ npm run build
```