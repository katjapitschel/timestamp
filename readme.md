#Timestamp

## Voraussetzungen

* VirtualBox >= 5.x
* Vagrant >= 1.8.5
* Composer

## Setup

    composer install
    vagrant up
    vagrant ssh
    
    mysql -u homestead -p -e "CREATE DATABASE timestamp DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"
    
    cd /timestamp
    
    php artisan migrate
    php artisan db:seed