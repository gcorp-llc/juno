# استفاده از تصویر رسمی PHP آخرین نسخه با Apache
FROM php:apache

# نصب وابستگی‌ها
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# نصب پیوست zip
RUN docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip

# نصب Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تنظیم دایرکتوری DocumentRoot Apache به public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# فعال کردن mod_rewrite
RUN a2enmod rewrite

# تنظیم مالکیت فایل‌ها به www-data
RUN chown -R www-data:www-data /var/www/html

# نسخه‌گیری فایل‌های پروژه
COPY . /var/www/html

# تنظیم دایرکتوری کاری
WORKDIR /var/www/html

# نصب وابستگی‌ها با Composer
# RUN composer install --no-interaction --optimize-autoloader --no-dev