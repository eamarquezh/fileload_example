# Establecer la imagen base de Apache con PHP
FROM php:7.4-apache

# Copiar el archivo index.php al directorio de trabajo en el contenedor
WORKDIR /var/www/html

COPY . /var/www/html

RUN chmod -R 777 /var/www/html/upload

# Exponer el puerto 80 para el tráfico web
EXPOSE 80

# Comando para iniciar Apache en segundo plano cuando se inicie el contenedor
CMD ["apache2-foreground"]
