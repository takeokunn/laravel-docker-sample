FROM alpine:latest

RUN apk --update add libtool gettext-dev libpng-dev mysql-client php7-simplexml php7-common php7-xsl php7-zip php7-tokenizer php7-tidy php7-xml php7-xmlreader php7-xmlwriter php7-session php7-sockets php7-phar php7-mysqlnd php7-opcache php7-exif php7-openssl php7-pcntl php7-pdo php7-pdo_mysql php7-iconv php7-intl php7-json php7-mbstring php7-mcrypt php7-mysqli php7-dom php7-fileinfo php7-gd php7-gettext php7-bcmath php7-bz2 php7-curl php7-fpm php7-pear php7-phpdbg php7-xdebug php7-ast nodejs nodejs-dev nodejs-npm curl-dev bzip2-dev openssl-dev git bash make openssl readline autoconf automake curl bzip2 gzip tar zip gcc g++
RUN rm -rf /var/cache/apk/*

WORKDIR /app

COPY . .

ADD composer.json /app
ADD composer.lock /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN php /usr/local/bin/composer install

# yarn
ADD package.json /app
ADD yarn.lock /app
RUN npm install -g yarn
RUN yarn
