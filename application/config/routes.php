<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'apresentacao';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
$route['apresentacao/login'] = 'apresentacao/viewLogin';
$route['apresentacao/quem-somos'] = 'apresentacao/viewQuemSomos';