# Установка

composer update

Запускаем Docker

make init

docker exec  -i php-fpm_test_blog sh -c 'exec composer update'
docker exec  -i php-fpm_test_blog sh -c 'exec php artisan migrate'

Сайт работает на порту 8000

localhost:8000

Управление новостями

localhost:8000/manager
