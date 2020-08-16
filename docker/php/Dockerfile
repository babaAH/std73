FROM php:7.4.5-fpm

WORKDIR /var/www
RUN apt-get update && apt-get install -y libpq-dev git zip unzip && apt-get clean 


RUN docker-php-ext-install pdo pdo_mysql


RUN apt-get install curl && \
	curl -s https://getcomposer.org/installer | php && \
	mv composer.phar /usr/local/bin/composer

RUN apt-get clean -y


# RUN groupadd -g 1000 root
# RUN usermod -u 1000 root 
# RUN useradd -u 1000 -ms /bin/bash -g root root

RUN chown -R root:root /var/www
# COPY --chown=root:root . /var/www
# RUN chmod -R 755 /var/www/storage && \
#     chmod -R 755 /var/www/storage/logs

USER root

EXPOSE 9000

CMD ["php-fpm"]

