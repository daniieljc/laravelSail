# Laravel Sail

## REQUIREMENTS

-   Docker
-   Composer

## HOW TO USE

WINDOWS

-   Accederemos a traves del subsistema de linux a la ruta de nuestro proyecto y ejecutaremos
-   `./vendor/bin/sail up`
-   `php artisan migrate`
-   En caso de que el comando anterior de problemas lo ejecutaremos desde el terminal en windows (si da problemas en la conexión cambiaremos en el .env el HOST a localhost y una vez realizada la migración volveremos a poner mysql).

LINUX

-   Accederemos al proyecto
-   `./vendor/bin/sail up`
-   `php artisan migrate`

### START IT

Accederemos a traves de la siguiente URL - http://localhost (Si no tenemos el puerto 80 ocupado)
