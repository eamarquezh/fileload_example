FROM php:7.4-apache

WORKDIR /app/

COPY . /app

RUN chmod -R 777 /app/upload

RUN chmod -R 777 /app

EXPOSE 80

CMD ["apache2-foreground"]
