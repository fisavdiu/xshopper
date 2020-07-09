### # How to install this project``




    git clone https://github.com/fisavdiu/xshopper
    cd xshopper/
    composer install
    symfony server:start**

##### Edit the DATABASE_URL env var in the .env file to use your database credentials.


    php bin/console doctrine:database:create
    php bin/console doctrine:schema:create
    php bin/console doctrine:fixtures:load --append

##### Since we need one admin user and no panel go to phpmyadmin and insert into db
Username: **admin**
Password: **admin**



    INSERT INTO `user` (
        `id`, 
        `email`, 
        `roles`, 
        `password`, 
        `first_name`,
        `last_name`
    ) VALUES (
        NULL, 
        'admin', 
        '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$d1NvQXdray5ialIzVnVVcQ$lF+M55dKfQc9LP0emX3hPV1gsjnmEjIfkv6hK/Bw1cI',
        'admin', 
        'admin'
    );

##### Now you can go to localhost/admin so you can edit products
