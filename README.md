# JobTrack Backend

Állásjelentkezéseket kezelő webalkalmazás backend része.  
A projekt Laravel alapú REST API-t biztosít a frontend számára, MySQL adatbázissal.
A backend a jelentkezések kezelését (CRUD), állapotváltásokat és később autentikációt szolgál ki.

---

## Technológiai stack

- PHP
- Laravel
- MySQL
- REST API
- Composer

---

## Követelmények

A futtatáshoz az alábbiak szükségesek:

- PHP
- Composer
- MySQL
- XAMPP vagy hasonló környezet

Ellenőrzés:
```bash
php -v
composer -V
```

---

## Projekt telepítése és futtatása

Repository klónozása:
```bash
git clone https://github.com/inataniel/jobtrack-backend.git
cd jobtrack-backend
```
PHP függőségek telepítése:
```bash
composer install
```
Fejlesztői szerver indítása:
```bash
php artisan serve
```
---

## Adatbázis beállítás

Szükség van egy MySQL adatbázisra pl. jobtrack_db majd a .env fájlban az alábbiakat beállítani:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jobtrack_db
DB_USERNAME=root
DB_PASSWORD=

Migrációk futtatása:
```bash
php artisan migrate
```