

# Laravel Form Bulder App

## Requirements:
  
- php 7.4 or higher.
- Mysql Database.
- check your internet connection.
- this laravel verison is 8.

## Clone the project  :

~~~bash  
  git clone https://github.com/sahlowle/form-builder
~~~


## Installation:

install via composer:

```bash
composer install
```

# Database and Seeds:
- edit .env file and add your database connection.
- run command to migrate tables and seed data.

```bash
php artisan migrate --seed
```

# Storage:
 need to run the storage:link command
```bash
php artisan storage:link
```


## Generate Key  

```
php artisan key:generate
```
## Run Locally  

now you can run the app 
```
php artisan serve
```



### User Acount:

you can use the existing account or create new account

```php
Email: user@gmail.com

password: 12345678
```
## Credits

- [Suhail Osman](https://github.com/sahlowle)

## License

MIT. Please see the [license file](license.md) for more information.


