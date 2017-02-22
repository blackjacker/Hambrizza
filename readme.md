<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://www.facebook.com/HAMBRIZZA/"><img src="https://www.facebook.com/HAMBRIZZA/photos/a.1799652810252320.1073741826.1799508003600134/1817052265179041/?type=1&theater" alt="Total Downloads"></a>

Setup: 
mkdir "workspace-folder"
git clone https://github.com/blackjacker/Hambrizza.git
composer install
chmod -R 777 storage; cp -p .env.example .env; php artisan key:generate
php artisan serve 

and test it on your browser 127.0.0.1:8080
