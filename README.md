# flow-guard

<h3>Configuração</h3>

## SQLite driver
```
sudo apt install -y sqlite3
```

Abaixo estão listados os principais comandos para subir o ambiente da aplicação.
<br>

## Instalação PHP
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
sudo apt install php-cli php-fpm php-pgsql php-xml php-mbstring php-zip php-bcmath php-tokenizer php-curl php-sqlite3 php-intl
```

```
php -v
```

## Instalação Composer
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

## Configuração Laravel
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

```
php artisan db:seed
```

## Teste
para buscar por um veículo cadastrado:
```
php artisan tinker
```

```
\App\Models\Automobile::all()->toArray();
```

Ctrl + C

Por fim, rode o comando abaixo e utilize o link para abrir o sistema em seu navegador. Utilize uma das placas apresentadas em seu terminal para testar o sistema
```
php artisan serve
```
