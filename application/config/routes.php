<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['business_cafe'] = 'businessCafe/index';
$route['business_cafe/(:any)'] = 'businessCafe/content/$1';
$route['celeb_zone'] = 'celebZone/index';
$route['celeb_zone/(:any)'] = 'celebZone/content/$1';
$route['daily_dose'] = 'dailyDose/index';
$route['daily_dose/(:any)'] = 'dailyDose/content/$1';
$route['gossip_girl'] = 'gossipGirl/index';
$route['gossip_girl/(:any)'] = 'gossipGirl/content/$1';
$route['health'] = 'health/index';
$route['health/(:any)'] = 'health/content/$1';
$route['main_story'] = 'mainStory/index';
$route['main_story/(:any)'] = 'mainStory/content/$1';
$route['mentality'] = 'mentality/index';
$route['mentality/(:any)'] = 'mentality/content/$1';
$route['open_forum'] = 'openForum/index';
$route['open_forum/(:any)'] = 'openForum/content/$1';
$route['posh_parlour'] = 'poshParlour/index';
$route['posh_parlour/(:any)'] = 'poshParlour/content/$1';
$route['sex_101'] = 'sex101/index';
$route['sex_101/(:any)'] = 'sex101/content/$1';
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
