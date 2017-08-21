# Pillars

Laravel base template used in almost all of our projects

## Installation

This guide assumes you are familiar with the [Laravel Homestead](https://laravel.com/docs/homestead) environment

### Laravel app
Download the master branch

```bash
git clone git@github.com:akmomx/pillars.git
```

Install composer dependencies

```bash
composer install
```


Make a copy of `.env.example` and rename it to `.env`

### Populating database
Create a database name 'test2' or modify the .env file to your convenience

Execute migrations

```bash
php artisan migrate
```

Make sure the method setpictureAttribute() in Product model is comented and execute next:


```bash
php artisan db:seed --class=MerchTypeTableSeeder
php artisan db:seed --class=ProductsTableSeeder
```

Uncomment the method above mentioned

### Using Homestead

Make sure to install the Laravel Homestead virtual machine

```bash
sudo vendor/bin/homestead make
```

##### Windows user may need to review detailed instructions on the Homestead documentation
