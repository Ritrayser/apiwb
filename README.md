# Описание проекта 
Реализация загрузки и сохранения данных с сериса https://github.com//cy322666/wb-api/blob/master/README.md

Было реализованно консольное приложение средствами laravel

Обязательно заполнить параметр API_TOKEN в env
### Описание установки 
Использованна БД SQlite apiwb.sqlite

Файл в корне проекта 
### Основные команды
Загрузка Stocks

php artisan dowload:stcoks --dateFrom=2025-10-25 --dateTo=2025-10-26 --page=1 --limit=100

Загрузка Incomes

php artisan dowload:incomes --dateFrom=2025-10-25 --dateTo=2025-10-26 --page=1 --limit=100

Загрузка Sales

php artisan dowload:sales --dateFrom=2025-10-25 --dateTo=2025-10-26 --page=1 --limit=100 

Загрузка Orderds

php artisan dowload:orders --dateFrom=2025-10-25 --dateTo=2025-10-26 --page=1 --limit=100

#### Описание параметров

--dateFrom - Дата с (обязательный параметр)

--dateTo - Дата по (обязательный параметр)

--page - Страница 

--limit - Ограничение количества записей 


