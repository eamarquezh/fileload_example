# Usar una imagen base de PHP con Apache
FROM php:7.4-apache

# Copiar la aplicación PHP a la carpeta /var/www/html del contenedor
COPY . /var/www/html

# Dar permisos de escritura a la carpeta upload
RUN chmod -R 777 /var/www/html/upload