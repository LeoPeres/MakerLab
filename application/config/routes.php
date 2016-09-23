<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Usuarios
$route['usuarios'] = 'User';
$route['usuarios/adicionar'] = 'User/adicionar';
$route['usuarios/editar/(:num)'] = 'User/editar/$1';
$route['usuarios/excluir/(:num)'] = 'User/excluir/$1';
$route['usuarios/atualizar'] = 'User/atualizar';
$route['usuarios/inserir'] = 'User/inserir';