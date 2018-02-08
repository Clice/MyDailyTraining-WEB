<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'InicialController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
// ROTAS DE LOGIN E PARA A PÁGINA PRINCIPAL
$route['login'] = 'UsuarioController';
$route['recuperar-senha'] = 'InicialController/viewRecuperarSenha';
$route['pagina-principal'] = 'InicialController/viewPaginaPrincipal';

// ROTAS PARA O RELATÓRIO, PERFIL E NOTIFICAÇÕES
$route['relatorio'] = 'InicialController/viewRelatorio';
$route['meus-dados'] = 'InicialController/viewMeusDados';
$route['notificacoes'] = 'InicialController/viewNotificacoes';

// ROTAS PARA AS LISTAS
$route['lista-alunos'] = 'AlunoController';
$route['lista-treinos'] = 'TreinoController';
$route['lista-academias'] = 'AcademiaController';
$route['lista-equaltech'] = 'EqualTechController';
$route['lista-instrutores'] = 'InstrutorController';
$route['lista-funcionarios'] = 'FuncionarioController';
$route['lista-administradores'] = 'AdministradorController';
$route['lista-administradores-academia'] = 'AdministradorController/viewListaAdministradoresAcademia';

// ROTAS PARA OS PERFIS
$route['perfil-aluno/(:any)'] = 'AlunoController/viewPerfilAluno/$1';
$route['perfil-academia/(:any)'] = 'AcademiaController/viewPerfilAcademia/$1';
$route['perfil-equaltech/(:any)'] = 'EqualTechController/viewPerfilEqualTech/$1';
$route['perfil-instrutor/(:any)'] = 'InstrutorController/viewPerfilInstrutor/$1';
$route['perfil-funcionario/(:any)'] = 'FuncionarioController/viewPerfilFuncionario/$1';
$route['perfil-administrador/(:any)'] = 'AdministradorController/viewPerfilAdministrador/$1';

// ROTAS PARA OS CADASTROS
$route['cadastrar-aluno/(:any)'] = 'AlunoController/viewCadastrarEditarAluno/$1';
$route['cadastrar-treino/(:any)'] = 'TreinoController/viewCadastrarEditarTreino/$1';
$route['cadastrar-academia/(:any)'] = 'AcademiaController/viewCadastrarEditarAcademia/$1';
$route['cadastrar-instrutor/(:any)'] = 'InstrutorController/viewCadastrarEditarInstrutor/$1';
$route['cadastrar-funcionario/(:any)'] = 'FuncionarioController/viewCadastrarEditarFuncionario/$1';
$route['cadastrar-administrador/(:any)/(:num)'] = 'AdministradorController/viewCadastrarEditarAdministrador/$1/$2';

// ROTAS PARA AS EDIÇÕES
$route['editar-aluno/(:any)'] = 'AlunoController/viewCadastrarEditarAluno/$1';
$route['editar-treino/(:any)'] = 'TreinoController/viewCadastrarEditarTreino/$1';
$route['editar-equaltech/(:any)'] = 'EqualTechController/viewEditarEqualTech/$1';
$route['editar-academia/(:any)'] = 'AcademiaController/viewCadastrarEditarAcademia/$1';
$route['editar-instrutor/(:any)'] = 'InstrutorController/viewCadastrarEditarInstrutor/$1';
$route['editar-funcionario/(:any)'] = 'FuncionarioController/viewCadastrarEditarFuncionario/$1';
$route['editar-administrador/(:any)/(:num)'] = 'AdministradorController/viewCadastrarEditarAdministrador/$1/$2';