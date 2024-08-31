
# Testing Recruitment App

Project Test untuk keperluan recruitment


## Environment Variables

copy .env.example ke .env terus sesuaikan koneksi db nya


## Run Locally

Clone the project

```bash
  git clone https://github.com/adityasuryadi/inventory.git
```

Go to the project directory

```bash
  cd nama-project
```

Install dependencies

```bash
  composer install
```

Run Migration and seeder

```bash
  php artisan migrate && php artisan db:seed
```

Start the server

```bash
  php artisan serve
```
## Jika error

```bash
composer dump-autoload
```

```bash
php artisan optimize
```
