FROM php:8.0-apache

# Instale dependências adicionais, se necessário
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Copie os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Habilite o módulo de reescrita do Apache
RUN a2enmod rewrite

# Configure o ServerName para evitar a mensagem de erro
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exponha a porta 80 para acesso ao servidor Apache
EXPOSE 80
