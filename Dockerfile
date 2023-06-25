# Usar una imagen base de PHP con Apache
FROM php:7.4-apache

# Copiar la aplicación PHP a la carpeta /var/www/html del contenedor
COPY . /app

# Dar permisos de escritura a la carpeta upload
RUN chmod -R 777 /app/upload