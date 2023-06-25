FROM php:latest

WORKDIR /usr/src/app

COPY . .

EXPOSE 3000

CMD ["php"]