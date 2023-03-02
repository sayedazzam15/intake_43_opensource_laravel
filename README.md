# Installation

1-clone the application first

    git clone https://github.com/sayedazzam15/intake_43_opensource_laravel.git

2-open cmd inside the application then run

    composer install

3-copy .env.example and rename the copy to .env

4-add your database configration inside .env

5-generate qpplication key

    php artisan key:generate

6-run migration file

    php artisan migrate
