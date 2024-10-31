<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Настройка окружения

Создайте файл .env, скопируйте данные из .env.examples и вставте в .env

## Запуск контейнера 
    docker-compose up -d
## Установка зависимостей
    docker exec -it product-catalog-app composer install
## Запуск миграции и сидеров 
    docker exec -it product-catalog-app php artisan migrate --seed
## Тестирование API в Postman 
Для тестирования API можно использовать Postman. Создайте запросы для следующих эндпоинтов:
 
- Каталог товаров с пагинацией и фильтрацией: GET /api/catalog
- Получение информации о товаре: GET /api/product/{id}
- Добавление отзыва: POST /api/product/{id}/review


