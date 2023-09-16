# WordPress install with Docker and Composer

- Requirements
- Install
- Uninstall

## Requirements

- Docker
- Docker Compose
- Composer

## Initial Setup

### Step One: Run the Docker containers

### Docker Compose

Run in the shell the following command.

```shell
$ docker-compose up -d
```

### Step Two: Change the wp-config file

Add the database name, database user, and database password.

In the generated files, one will be called `wp-config.php`

Open that file look for lines `41-49` and change the code there that looks like this:

```php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'wordpress'));

/** Database username */
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', 'example user'));

/** Database password */
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'example password'));
```

to something that looks like this:

```php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'db_wordpress'));

/** Database username */
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', 'wordpress'));

/** Database password */
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'wordpress'));
```

### Step Two: Install PHP Dependencies

#### Composer

Install the required packages using Composer.

```shell
$ composer install
```

## Running After First Setup
