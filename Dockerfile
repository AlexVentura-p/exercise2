FROM php:8.1-cli
COPY . /usr/src/exercise2
WORKDIR /usr/src/exercise2
CMD [ "php","./exercise2.php" ]