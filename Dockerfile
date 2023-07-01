# Establecer la imagen base a PHP con Apache
FROM php:8.0-apache

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar el código fuente de la aplicación
COPY . .

# Exponer el puerto 8080 para acceder a la aplicación
EXPOSE 8080

# Configurar Apache para trabajar con PHP
RUN a2enmod rewrite
RUN a2enmod headers

# Comando personalizado para iniciar la aplicación en Railway
CMD ["railway", "run", "apache2-foreground"]