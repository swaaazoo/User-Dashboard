<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation');

$autoload['helper'] = array('url');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('login', 'user', 'dashboard', 'profile', 'wall');

//end of autoload.php