# Laravel - Kurs
Predstavlja Framework za OOP PHP i koristi **MVC** (Model View Controller) arhitekturu.
Kurs se nalazi na Udemy-u kreirao ga je Edwin Diaz.
Potrebni alati su:

 - XAMPP
 - GIT (Bash) - dodati u path
 - MySQL - dodati u path [C:\xampp\mysql\bin] - komanda [mysql -uroot -p]
 - Composer PHP
 - Node JS
 - VS Code ili PHP Storm
 - LARAVEL [Instalacija](https://laravel.com/docs/9.x/installation) 
 
## Najlaksa instalacija

    composer create-project  laravel/laravel  example-app
    
    cd  example-app
    
    php artisan  serve
ili instaliranje laravela kao globalnu composer bibioteku

    composer global  require  laravel/installer
    
    laravel new  example-app
    
    cd  example-app
    
    php artisan  serve

Preporuka je da se u VS Code terminal podesi da po defaultu bude **GIT BASH** a ne Windows CMD

## Glavni folderi u projektu

 - app
 - resources/views (HTML)
 - routes/web.php (linkovi)
 
U nastavku ce i ostali biti definisani
