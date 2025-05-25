## About Yerhash
The Yarhash application is an application for displaying advertisements for various products and services, and it is designed specifically for individuals and companies who want to sell or buy products. The app is free to use, and provides a wide range of features that can help users post their ads and attract potential buyers.


عباره عن مشروع لاضافة الاعلانات داخل اقسام معينه وعرضها 
مثال يتواجد عندنا قسمين رئيسين خدمات واعلانات 
يتم اضافة فيهم اعلانات ولتكن لقاعات الافراح فيستطيع العميل الدخول عالقسم المناسب ومشاهدة تفاصيل الاعلان وحجزة 
كما يمكن التواصل مع الاداره لاضافة اعلان خاص بيك 




##  Laravel Version

Laravel 6

## Installation
Use the compser to install  package 
run migrate

```bash
composer install -a -o --ignore-platform-reqs
php artisan migrate
php artisan passport:install

```

## Create Super Admin 
run command line to create superadmin with email and password send 
default
Email   : admin@admin.com
password: admin123

```bash 
php artisan admin:create
or
php artisan admin:create admin@admin.com as123456

```

## Run Seeder 
run command line to create basic  date 

```bash 
php artisan module:seed Area
php artisan module:seed Page
php artisan module:seed Category
php artisan module:seed QSale

```

## Notes
in this project all api response chached beceause of using 'spatie/laravel-responsecache' package
so that after every change in api run this command
```bash 
php artisan responsecache:clear

```

```bash 
php artisan module:seed Area
php artisan module:seed Page
php artisan module:seed Category
php artisan module:seed QSale

```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
