# Establecer la imagen base de Apache con PHP
FROM php:7.4-apache

# Copiar el archivo index.php al directorio de trabajo en el contenedor
WORKDIR /usr/src/app

COPY . /usr/src/app

RUN chmod -R 777 /usr/src/app/upload

# Exponer el puerto 80 para el tráfico web
EXPOSE $PORT

# Comando para iniciar Apache en segundo plano cuando se inicie el contenedor
CMD ["apache2-foreground"]





FROM ghcr.io/railwayapp/nixpacks:ubuntu-1684957838@sha256:eb26a5ad60faad269d01ac896a4eefb5e7987040d39549dbe5d8cdfd1a830b75

WORKDIR /app/

COPY .nixpacks/nixpkgs-293a28df6d7ff3dec1e61e37cc4ee6e6c0fb0847.nix .nixpacks/nixpkgs-293a28df6d7ff3dec1e61e37cc4ee6e6c0fb0847.nix

RUN nix-env -if .nixpacks/nixpkgs-293a28df6d7ff3dec1e61e37cc4ee6e6c0fb0847.nix && nix-collect-garbage -d

COPY .nixpacks/assets /assets/

COPY . /app

RUN chmod -R 777 /app/upload

RUN chmod -R 777 /app

RUN  mkdir -p /var/log/nginx && mkdir -p /var/cache/nginx




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

