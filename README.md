# Web project - Beauty salon

This is a school project for Web Applications Delevolpment course.

This app was created for a client who wants to show its services and administraite its clients, products and services info.

### Screenshot

![](public/img/ScreenShot%20-%20home.png)

## Development Setup

### Table of contents

-   [Install required programs](#install-required-programs)
-   [Clone program from GitHub](#clone-program-from-github)
-   [Install Laravel dependencies](#install-laravel-dependencies)
-   [Make migrations](#make-migrations)
-   [Run progam](#run-program)

## Install required programs

For start working with Laravel, you need to have installed PHP, Composer and Xampp on your PC. This project works with **PHP 8.2.0** and **Composer 2.5.2**.

You can download PHP, Composer and Xampp by clicking the next links:

-   [PHP](https://www.php.net/downloads.php)
-   [Composer](https://getcomposer.org/)
-   [Xampp](https://www.apachefriends.org/es/download.html)

## Clone program from GitHub

As you have installed the required programs, you need to open a terminal witch allows Git Bash\* and then, follow the next steps:

If you don't have Git installed, click [here](https://git-scm.com/downloads) for install it.

-   Go to the folder where you will work with your code like:

    ```bash
    cd /project/
    ```

-   Initialize Git

    ```bash
    git init
    ```

-   Clone the repo into the project:

    ```bash
    git clone https://github.com/MrVoltok/ProyectoAppWeb.git

    cd ProyectoAppWeb/
    ```

## Install Laravel dependencies

### vendor and NodeJs

When clonning the repo from github, it will not have **vendor** and **Node Js** folder. To get vendor folder and Node Js, open a terminal and write the next command:bash

```bash
composer install

npm install
```

### env file

When you clone a Laravel repo, the file _.env_ will no exist.
To get .env file, just create a new file named _.env_ and copy the all the content from _.env.example_.

When copying _.env_ content, you'll notice that APP_KEY value is empty. To get a new key, open a terminal and write the next command:

```bash
php artisan key:generate
```

## Make migrations

Before running the program for first time, you need to migrate all the database into Mysql by writing the next command:

```bash
php artisan migrate
```

## Run program

As you installed all the dependencies, you can run this program by following the next steps:

-   Open a terminal and write the next command:
    ```bash
    php artisan serve
    ```
-   Open another terminal and write the next command:
    ```bash
    npm run dev
    ```
