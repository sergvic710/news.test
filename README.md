# Установка

composer update

Запускаем Docker

make init

docker exec  -i php-fpm_test_blog sh -c 'exec composer update'
docker exec  -i php-fpm_test_blog sh -c 'exec php artisan migrate'
