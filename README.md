## Leírás
Kreatív szabadságom arra használtam, hogy egy gyakorikerdesek.hu-hoz hasonló kérdés-válasz oldalt hozzak létre a számomra újonnan megismert Laravel Framework témájában. Az oldal magyar nyelvű, letisztult, felhasználóbarát. A kód nyelvezete és dokumentálása angol. A fejlesztés során végig Github-ot használtam, így a teljes fejlesztési folyamat nyomon követhető.

Fontos: XAMPP-ot használtam a fejlesztés során, MySQL nyelvű az adatbázis
XAMPP dokumentáció és letöltés: <a href="https://www.apachefriends.org/hu/index.html"></a>

Az exportált adatbázis megtalálható itt a repositoryban is. 


## Beüzemelés
A beüzemelés egyszű.

Ha XAMPP-ot használunk, indítsuk el az Apache és a MySQL szervereket!

Az adatbázis kapcsolódáshoz a következő paramétereket használja a projekt: <br>
DB_CONNECTION=mysql<br>
DB_HOST=localhost<br>
DB_PORT=3306<br>
DB_DATABASE=faq<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>
Ha ezek nem megfelelőek, a faq/.env fájlban módosíthatók.

Hozzuk létre a szükséges adatbázist:
Ehhez nyissunk meg egy parancssort, és írjuk be a következőket: 
- mysql -u root 
    (ha ez a parancs nem működik, adjuk hozzá a MySQL-t a 'Path' környezeti változóhoz; XAMPP esetében ez az út \xampp\mysql\bin; hozzáadás után újra kell indítani a gépet)
- create database faq;
Ezek után bezárhatjuk a parancssort.

Az utolsó lépésekhez csupán Composer-re (ha még nincs a gépünkön), és pár utasításra van szükség parancssorban:
- a Composer letöltését és telepítését az alábbi helyről tehetjük meg: <a href="https://www.tutorialspoint.com/laravel/laravel_installation.htm"></a> 
- navigáljunk a projekt 'faq' mappájába (pl.: cd C:\Users\userxyz\Desktop\Project\faq)
- adjuk ki a következő parancsokat:
    - php artisan migrate
    - php artisan serve

Ha sikeresen lefutottak a parancsok, akkor a serve parancs kimenete valami hasonló: Starting Laravel development server: http://127.0.0.1:8000

A linkre navigálva böngészőben láthatjuk is a beüzemelt projektet.


## Funkciók
Kérdések és válaszok rendezése, listázása, feltöltése,  módosítása, törlése.
Válaszok hasznosságának értékelése.


---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
## Laravel project introduction

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
