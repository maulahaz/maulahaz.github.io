<!-- Install PHP -->
<!-------------------------------------------------------------------->
Sumber: https://www.sitepoint.com/how-to-install-php-on-windows/
- Download PHP yg di mau
- Edit PHP.INI :
-+ Enable ext berikut:
-+ extension_dir = "C:/php/ext"  <-- foldr disesuaikan sama lokasi ext folder
-+ extension=curl
-+ extension=gd2
-+ extension=mbstring
-+ extension=mysql
-+ extension=pdo_mysql
-+ extension=xmlrpc
- Register di Environtment Window
- Edit Path: Arahkan ke : Folder hasil downloadan PHP nya.
- Restart cmd or Terminal
- Test pake: php -v
                                     
<!-- Error pas Load SQL file ke Laragon -->
<!-------------------------------------------------------------------->   
Ada error [1115 - Unknown character set: 'utf8mb4'], solusinya:
Ganti: mysql server 5.5.3 or newer, 
Ato: replace all 'utf8mb4' to 'utf8' in your DB dump


<!-- Install Apache di Laragon Portable -->
<!-------------------------------------------------------------------->
Laragon Portable atom Mint Edition, itu bundle nya pake Nginx.. krn biasanya pake Apache, gini cara jalaninnya:
- Download Apache yg sesuai versi Windownya: https://www.apachelounge.com/download/ -- misalnya versi: httpd-2.4.28-win64-VC14
- Extract the downloaded to: {LARAGON_ROOT}\bin\apache\httpd-2.4.28-win64-VC14
- Jalanin Laragon, trus Select Menu > Apache > Version > httpd-2.4.28-win64-VC14
- Jangan lupa Nginx nya di disable, di Menu Setting biar nggak bentrok.
