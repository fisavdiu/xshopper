How to install this project
git clone https://github.com/fisavdiu/xshopper
cd xshopper/
composer install
symfony server:start

Edit the DATABASE_URL env var in the .env file to use your database credentials.
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
php bin/console doctrine:fixtures:load --append
