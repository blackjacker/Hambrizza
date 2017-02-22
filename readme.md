<h5>HAMBRIZZA</h5>

Setup: 

mkdir "workspace-folder"

git clone https://github.com/blackjacker/Hambrizza.git

composer install

chmod -R 777 storage; cp -p .env.example .env; php artisan

key:generate

php artisan serve 

and test it on your browser 127.0.0.1:8080
