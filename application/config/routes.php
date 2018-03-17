<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['news/delete/(:any)']='news/delete/$1';
$route['news/update/(:any)']='news/update/$1';
$route['news/create']='news/create';
// $route['admin']='admin';
$route['admin']='admin/home';
$route['admin/allevent']='admin/allevent';
$routes['admin/delete_message']='admin/delete_message/$1';
$routes['admin/mailbox']='admin/mailbox/$1';
$route['admin/addanggota']='admin/addanggota';
$route['admin/search']='admin/search';
$route['admin/image/delete/(:any)']='admin/delete_images/$1';
$route['admin/edit_image/(:any)']='admin/edit_image_acara/$1';
$route['admin/image/(:any)']='admin/activity_acara_img/$1';
$route['admin/activity']='admin/activity_acara';
$route['admin/create']='admin/create';
$route['admin/galleryacara']='admin/acara_gallery';
$route['admin/uploadgambar']='admin/uploadgambar';
$route['admin/update/(:any)']='admin/update/$1';
$route['admin/delete/(:any)']='admin/delete/$1';
$route['admin/contact_message']='admin/messagebox';
$route['admin/contact_message/(:any)']='admin/messagebox/$1';



$route['news']='news';
$route['news/(:any)']='news/view/$1';
$route['contact']='halaman/message';
$route['anggotahmif']='halaman/anggota';
$route['anggotahmif/(:any)']='halaman/anggota/$1';
$route['events/(:any)'] = 'halaman/allevent/$1';
$route['gallery/(:any)'] = 'halaman/gallery/$1';
$route['events'] = 'halaman/allevent';
$route['events/search'] = 'halaman/search';
$route['event/(:any)'] = 'halaman/event/$1';
$route['(:any)'] = 'halaman/view/$1';
$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1';
$route['404_override'] = ' ';
$route['translate_uri_dashes'] = FALSE;
