# Laravel Blog

A simple laravel blog with multiple users and authorization.

## Setup
```
git clone https://github.com/Shadrock1/MyBlog.git
cd MyBlog
```
Do composer installation and update. Next:
```
cp .env.example .env
```
Don't forget to change your .env five on right data.
```
DB_DATABASE= yourDatabase

DB_USERNAME= yourUser

DB_PASSWORD= yourSecretPassword :)
```
And make the key:
```
php artisan key:generate
```
Than do migration:
```
php artisan migrate
```
