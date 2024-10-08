# flow-guard

<h3>Configuração</h3>

Abaixo estão listados os principais comandos para subir o ambiente da aplicação.
<br>

<h2>Instalação PHP</h2>
    ```
    sudo apt update
        && sudo apt install software-properties-common
        && sudo add-apt-repository ppa:ondrej/php
        && sudo apt update
    ```

    ```
    sudo apt install php
    ```

    ```
    sudo apt install php-cli php-fpm php-pgsql php-xml php-mbstring php-zip php-bcmath php-tokenizer php-curl
    ```

    ```
    php -v
    ```

<h2>Instalação Composer</h2>
    ```
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ```

    ```
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    ```

    ```
    php composer-setup.php
    ```

    ```
    php -r "unlink('composer-setup.php');"
    ```

    ```
    sudo mv composer.phar /usr/local/bin/composer
    ```

<h2>Instalação PostgreSQL</h2>
    ```
    docker compose up -d
    ```

<h2>Instalação Laravel</h2>
    ```
    cp .env.example .env
    ```

    ```
    composer install
    ```

    ```
    php artisan key:generate
    ```

    ```
    php artisan migrate
    ```