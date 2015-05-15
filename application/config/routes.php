<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main/index";
$route['login'] = "logins/new_login";
$route['create_login'] = "logins/create_login";
$route['register'] = "users/new_reg";
$route['create_user'] = "users/create_reg";
$route['dashboard'] = "dashboards/user_dashboard";
// $route['admin_dashboard'] = "dashboards/user_dashboard";
$route['profile'] = "profiles/user_profile";
$route['logoff'] = "logins/destroy_login";
$route['404_override'] = '';

// $route['user_dash'] = 'logins/logins_show';

//end of routes.php