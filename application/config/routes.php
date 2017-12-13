<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'paginainicialcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
$route['login'] = 'paginainicialcontroller/viewLogin';
$route['pagina-principal'] = 'sistema/paginaprincipalcontroller';

$route['lista-alunos'] = 'sistema/alunocontroller';
$route['lista-treinos'] = 'sistema/treinocontroller';
$route['lista-academias'] = 'sistema/academiacontroller';
$route['lista-equaltech'] = 'sistema/equaltechcontroller';
$route['lista-instrutores'] = 'sistema/instrutorcontroller';
$route['lista-funcionarios'] = 'sistema/funcionariocontroller';
$route['lista-administradores'] = 'sistema/administradorcontroller';

$route['cadastrar-aluno'] = 'sistema/alunocontroller/viewcadastraraluno';
$route['cadastrar-treino'] = 'sistema/treinocontroller/viewcadastrartreino';
$route['cadastrar-academia'] = 'sistema/academiacontroller/viewcadastraracademia';
$route['cadastrar-instrutor'] = 'sistema/instrutorcontroller/viewcadastrarinstrutor';
$route['cadastrar-funcionario'] = 'sistema/funcionariocontroller/viewcadastrarfuncionario';
$route['cadastrar-administrador'] = 'sistema/administradorcontroller/viewcadastraradministrador';

$route['relatorio'] = 'sistema/academiacontroller/viewrelatorio';
$route['perfil'] = 'sistema/paginaprincipalcontroller/viewperfil';
$route['notificacoes'] = 'sistema/paginaprincipalcontroller/viewnotificacoes';