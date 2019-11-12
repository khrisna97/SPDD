<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'controllerPegawai/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['keluar'] = 'controllerPegawai/logout';
$route['ubah'] = 'controllerSurat/ubahSPD';
$route['SPD'] = 'controllerSurat/daftarSurat';
$route['admin/SPD'] = 'controllerSurat/admindaftarSurat';
$route['ajaxSPD/(:any)'] = 'controllerSurat/data_ajax/$1';
$route['hapusSPD/(:any)'] = 'controllerSurat/hapusSurat/$1';
$route['admin/lihatSurat/(:any)/(:any)'] = 'controllerSurat/lihatSurat/$1/$2';
$route['setuju'] = 'controllerSurat/adminSetuju';
$route['tolak/(:any)'] = 'controllerSurat/adminTolak/$1';
$route['admin/t_user'] = 'controllerSurat/admintambahuser';
$route['admin/register'] = 'ControllerPegawai/register';
$route['lupa_password'] = 'Lupa_password/index1';
$route['lupa_password/reset_password/token/(:any)'] = 'Lupa_password/reset_password/$1';