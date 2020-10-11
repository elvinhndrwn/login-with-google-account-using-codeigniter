###################
[DEMO PROGRAM](https://portfolio.elvinhendrawan.site/oauth/google_login/login)
###################

*******************
Yang di butuhkan :
*******************
1. Codeigniter 3
2. Composer
3. Git Bash
4. Google API Client Library

*******************
Cara Instalasi :
*******************

1. Download file zip nya.
2. Extract ke dalam folder htdocs, lalu import file sql kedalam phpmyadmin dan silahkan atur konfigurasi database nya didalam folder application/database.php
3. Setelah itu, kunjungi halaman  https://console.developers.google.com/ untuk mendapatkan Google API.
4. Setelah mengunjungi tautan diatas, silahkan daftar dan membuat projek baru.
5. Setelah Projek dibuat, selanjutnya klik menu krudensial lalu buat Client ID oAuth melalui tombol "Buat Krudensial"
6. Isi bagian "URI pengalihan yang diotorisasi" dengan url controller login anda. Jika sudah klik Simpan.
7. Simpan Client ID dan Secret Key yang telah didapatkan.
8. Setelah itu Download Google API Client Library for PHP script dengan cara Buka folder projek Anda, lalu silahkan menuju ke folder aplication lalu masuk ke libraries
9. Didalam folder libraries silahkan klik kanan lalu "Git Bash Here"
10. Jika jendela git bash sudah muncul, ketikan : composer require google/apiclient:"^2.0"
11. Tunggu hingga proses download selesai.




