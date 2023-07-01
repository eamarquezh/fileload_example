# Establecer la imagen base a PHP
FROM php:latest

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar el archivo index.php al contenedor
COPY index.php .

# Exponer el puerto 80 para acceder al servidor web de PHP
EXPOSE 80

# Ejecutar el archivo index.php cuando se inicie el contenedor
CMD ["php", "-S", "https://fileloadexample-production.up.railway.app"]