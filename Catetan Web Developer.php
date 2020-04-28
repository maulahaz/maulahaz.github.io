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