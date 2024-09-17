# Базовый образ интерпретатора языка программирования PHP
FROM php:8.1.5-fpm
# Рабочая директория
WORKDIR /var/www
# Установки необходимых утилит по работе с mysql
RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install mysqli
# сервис, который должен быть запущен 
CMD ["php-fpm"]
