# QTRUST TEST

Sebelum running project ini, langkah-langkah yang harus dilakukan:
- setelah melakukan git clone/ download project ini, running `composer install`
- buat file bernama `.env`
- copy isi file `.env.example` ke dalam `.env`
- isi hal-hal penting di dalam `.env` seperti `DB_DATABASE`,`DB_USERNAME`,`DB_PASSWORD`
- lakukan command `php artisan migrate` untuk migrasi database
- kemudian running project ini dengan command `php -S localhost:{port} -t public` jika tidak memakai xampp/valet
- untuk insert data api nya bisa menuju ke url `/new-job` method `post` dengan body `key : name dan detail` untuk `value (string)`
- untuk update data api nya bisa menuju ke url `/update-job/{id}` method `put` dengan body `key : name dan detail` untuk `value (string)`
