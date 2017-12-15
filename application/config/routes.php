<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'PaginaInicialController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
$route['login'] = 'sistema/LoginController';
$route['pagina-principal'] = 'sistema/PaginaPrincipalController';

$route['lista-alunos'] = 'sistema/AlunoController';
$route['lista-treinos'] = 'sistema/TreinoController';
$route['lista-academias'] = 'sistema/AcademiaController';
$route['lista-equaltech'] = 'sistema/EqualTechController';
$route['lista-instrutores'] = 'sistema/InstrutorController';
$route['lista-funcionarios'] = 'sistema/FuncionarioController';
$route['lista-administradores'] = 'sistema/AdministradorController';

$route['cadastrar-editar-aluno'] = 'sistema/AlunoController/viewCadastrarEditarAluno';
$route['cadastrar-editar-treino'] = 'sistema/TreinoController/viewCadastrarEditarTreino';
$route['cadastrar-editar-academia'] = 'sistema/AcademiaController/viewCadastrarEditarAcademia';
$route['cadastrar-editar-instrutor'] = 'sistema/InstrutorController/viewCadastrarEditarInstrutor';
$route['cadastrar-editar-funcionario'] = 'sistema/FuncionarioController/viewCadastrarEditarFuncionario';
$route['cadastrar-editar-administrador'] = 'sistema/AdministradorController/viewCadastrarEditarAdministrador';

$route['relatorio'] = 'sistema/AcademiaController/viewRelatorio';
$route['perfil'] = 'sistema/PaginaPrincipalController/viewPerfil';
$route['notificacoes'] = 'sistema/PaginaPrincipalController/viewNotificacoes';
