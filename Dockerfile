FROM php:7.4-cli

RUN apt-get update && apt-get install -y git

RUN useradd -rm -d /home/runner -s /bin/bash -g root -G sudo -u 1001 runner
USER runner
WORKDIR /home/runner

COPY index.php .
COPY composer.json .

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

RUN composer install
CMD [ "php", "./index.php" ]