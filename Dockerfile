FROM php:8.1 as envinroment

COPY composer.phar /app/
COPY . /app/
WORKDIR /app/

RUN php composer.phar install --prefer-dist --no-dev --optimize-autoloader --no-interaction

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000