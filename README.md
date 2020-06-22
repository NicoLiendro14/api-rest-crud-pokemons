# API REST / CRUD Pokemons

<img src="https://i.imgur.com/uGFBf1a.png"/>

An app to Create, Read, Update and Delete pokemons.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

1. Install Composer Dependencies

```
composer install
```

2. Install NPM Dependencies

```
npm install
```

3. Create a copy of your .env file

```
cp .env.example .env
```

4. Generate an app encryption key

```
php artisan key:generate
```

5. Create an empty database for our application

6. In the .env file, add database information to allow Laravel to connect to the database

    In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

7. Migrate the database

```
php artisan migrate
```

### Installing

You only have to run this artisan command:

```
php artisan serve
```

## Built With

-   [Laravel](https://laravel.com/) - PHP Framework.
-   [Bootstrap](https://getbootstrap.com/) CSS Framework. Build fast, responsive sites with Bootstrap.

## Authors

-   **Nicolás Liendro** - _Initial work_ - [GitLab](https://gitlab.com/NicoLiendro14),
    [GitHub](https://github.com/NicoLiendro14) and
    [LinkedIn](https://www.linkedin.com/in/nicol%C3%A1s-liendro-00248a178/)
