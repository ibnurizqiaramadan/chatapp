<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route = array_merge($route, [
    'chat' => 'Chat/chatUser',
    'chat/getOnlineUser' => 'Chat/getOnlineUser',
    'chat/storeMessage' => 'Chat/storeMessage',
    'chat/(:any)' => 'Chat/chatUser/$1',
]);
