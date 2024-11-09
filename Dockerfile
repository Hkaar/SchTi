FROM php:8.2-cli

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    libonig-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    curl \
    git \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libxpm-dev \
    libicu-dev \
    nodejs \
    npm \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Remove the default HTML directory to avoid conflicts
RUN rm -rf /var/www/html

# Copy application files to container
COPY --chown=www-data:www-data . /var/www

RUN chown -R www-data:www-data /var/www

RUN mkdir -p /var/www/.npm && chown -R 33:33 /var/www/.npm

# Switch to www-data user to run commands
USER www-data

# Install Composer dependencies
RUN composer install

# Install NPM dependencies and build assets
RUN npm install && npm run build

# Expose the port the app will run on
EXPOSE 8000

# Entry point to run migrations, seed, and start the app
CMD php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=8000
