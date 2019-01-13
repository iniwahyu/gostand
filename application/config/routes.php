<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'Welcome/error';
$route['translate_uri_dashes'] = FALSE;


$route['coba'] = 'Welcome/coba';

// REGISTERLGOIN CONTROLLER

$route['registrasi'] = 'Registerlogin/registrasi';
$route['login'] = 'Registerlogin/login';
$route['logout'] = 'Registerlogin/logout';
$route['tambahadmin'] = 'Registerlogin/tambahadmin';

// WELCOME
$route['produk'] = 'Welcome/produk';
$route['makanan'] = 'Welcome/makanan';
$route['minuman'] = 'Welcome/minuman';
$route['toko'] = 'Welcome/toko';
$route['produktoko'] = 'Welcome/produktoko';
$route['minuman/(:any)'] = 'Welcome/lihatminuman/$1';
$route['makanan/(:any)'] = 'Welcome/lihatmakanan/$1';

// PEMBELI
$route['history'] = 'Pembeli/history';
$route['keranjang'] = 'Pembeli/keranjang';

// PENJUAL

// ADMIN
$route['admin/user/tambah'] = 'Admin/tambahuser';
$route['user/viewuser'] = 'Admin/viewuser';
$route['admin/user/(:any)'] = 'Admin/edituser/$1';