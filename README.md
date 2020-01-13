# How to make app in 20 minutes with laravolt/workflow

Laravolt/workflow menggunakan framework **laravel** dan **camunda engine**, pastikan semua requirement sudah terinstall pada komputer anda terutama **laravel dan server camunda nya**

### Step

 1. Pastikan sudah terdapat file bpmn dan server camunda nya
 2. Pastikan file bpmn sudah ter deploy di server camunda dan sudah terdapat minimal satu **process definitions**
 3. `cd` ke folder yang diinginkan
 4. buat **new laravel app** dengan perintah `
composer create-project --prefer-dist laravel/laravel nama_aplikasi`
 atau `laravel new nama_aplikasi`
 3. `cd nama_aplikasi`
 4. buka link ini [contoh env camunda](https://github.com/damarteplok/env_example/blob/master/.env_example) 
 5. copy paste di bagian paling bawah `.env` anda
 6. create new database, apapun itu terserah, masukan nama db beserta config sql di `.env` anda,
 7. edit `CAMUNDA_API_URL='link camunda server'` dengan memasukan link camunda server anda
 8. buka link ini [contoh composer json](https://github.com/damarteplok/env_example/blob/master/composer_file)
 9. edit `composer.json` , ganti bagian `require` , `require-dev`, dan `extra` anda dengan link pada no 10 tadi
 10.  `composer update`, tunggu sampai selesai
 11. `php artisan vendor:publish` pilih yang ada tulisan UI, epicentrum, media, auth ini untuk custom supaya gk pake bawaan laravel, kalau kepengen gampangnya yakni, publish all
 12. `php artisan migrate`
 13. `php artisan storage:link`
 14. `php artisan laravolt:link`
 15. edit `web.php` ganti route nya, sesuai kan dengan ini
 16. `Route::get('/', 'Home')->name('home');
Route::get('/dashboard', 'Dashboard')->name('dashboard')`;
 17. ganti file `user.php` dengan file yang terdapat pada [link ini](https://github.com/damarteplok/env_example/blob/master/user.php)
 18. jalankan `php artisan laravolt:admin` untuk membuat admin beserta password di applikasinya
 19. masukan nama, email, beserta password nya
 20. jalankan `php artisan workflow:import nama_proses_definition` proses ini utk menginisilisasi dari camunda ke db dan applikasi kita
 21. jalankan `php artisan workflow:make` utk membuat configurasi dari proses definition camunda yang udah terinisialisasi dengan command pada no 16
 22. jalankan `php artisan workflow:sync-module` ini untuk melakukan sync dr perubahan lokal ke camunda, lakukan command tersebut utk pertama kali setelah `php artisan workflow:make` atau ada perubahan pada `config/workflow-modules/`
 23. untuk lebih lengkap nya bisa membaca documentasi di [laravolt.dev](https://laravolt.dev/)
    
