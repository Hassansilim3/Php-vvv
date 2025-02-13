FROM php:8.2-cli
  WORKDIR /app
  COPY . .
  RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
  RUN composer install
  CMD ["php", "bot.php"]
