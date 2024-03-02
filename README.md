# sidemaya
Sistem Informasi Desa Manud Jaya

## Features

### Download layanan umum template
http://127.0.0.1/layanan-umum

## Setup

Steps:
- Install Docker Desktop
- Install Github Desktop
- Checkout this project
- Start cmd at checkout location
    - `cd laradock-sidemaya/`
    - `docker-compose up -d nginx mysql`
- Access http://127.0.0.1/


## Development

### Update laradock-sidemaya
`git submodule update --recursive --remote`

### Reload nginx
From laradock-sidemaya
`docker-compose exec nginx nginx -t`
`docker-compose exec nginx nginx -s reload`

### Go to workspace
- Start cmd at checkout location
    - `cd laradock-sidemaya/`
    - `docker-compose exec --user=laradock workspace bash`

### Create sidemaya-website
From workspace `composer create-project laravel/laravel sidemaya-website`

### Install libraries
From workspace `composer require "spatie/laravel-medialibrary:^11.0.0"`

### Install breeze
From workspace 
- `composer require laravel/breeze --dev`
- `php artisan breeze:install`
- `php artisan migrate`
- 