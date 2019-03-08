<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tarik/delete/(:any)'] = 'tariks/delete/$1';
$route['tarik/update/(:any)'] = 'tariks/update/$1';
$route['tariks/create'] = 'tariks/create';

$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/update/(:any)'] = 'news/update/$1';
$route['news/create'] = 'news/create';
$route['default_controller'] = 'news';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
