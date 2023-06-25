FROM railwayapp/app:latest

COPY . /app

RUN composer install --no-interaction --no-scripts

RUN php artisan migrate

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
