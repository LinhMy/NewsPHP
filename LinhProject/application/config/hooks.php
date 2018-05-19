<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['pre_controller'] = array(
        'class'    => 'logout',
        'function' => 'index',
        'filename' => 'logout.php',
        'filepath' => 'hooks'//,
        //'params'   => array('beer', 'wine', 'snacks')
);
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
