<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 	= 'welcome/home';
$route['about'] 				= 'welcome/about';
$route['post/'] 				= 'welcome/post';
$route['post/(:num)'] 			= 'welcome/post/$1';
$route['contact'] 				= 'welcome/contact';
$route['admin'] 				= 'login/index';

$route['404_override']			= '';
$route['translate_uri_dashes'] 	= FALSE;