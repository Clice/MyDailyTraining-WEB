<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'PaginaInicialController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
// ROTAS DE LOGIN E PARA A PÁGINA PRINCIPAL
$route['login'] = 'sistema/LoginController';
$route['pagina-principal'] = 'sistema/PaginaPrincipalController';
$route['recuperar-senha'] = 'equaltech/LoginController/cRecuperarSenha';

// ROTAS PARA O RELATÓRIO, PERFIL E NOTIFICAÇÕES
$route['relatorio'] = 'sistema/AcademiaController/viewRelatorio';
$route['perfil'] = 'sistema/PaginaPrincipalController/viewPerfil';
$route['notificacoes'] = 'sistema/PaginaPrincipalController/viewNotificacoes';

// ROTAS PARA AS LISTAS
$route['lista-alunos'] = 'sistema/AlunoController';
$route['lista-treinos'] = 'sistema/TreinoController';
$route['lista-academias'] = 'sistema/AcademiaController';
$route['lista-equaltech'] = 'equaltech/EqualTechController';
$route['lista-instrutores'] = 'sistema/InstrutorController';
$route['lista-funcionarios'] = 'sistema/FuncionarioController';
$route['lista-administradores'] = 'sistema/AdministradorController';

// ROTAS PARA OS PERFIS
$route['perfil-aluno/(:any)'] = 'sistema/AlunoController/viewPerfilAluno/$1';
$route['perfil-academia/(:any)'] = 'sistema/AcademiaController/viewPerfilAcademia/$1';
$route['perfil-equaltech/(:any)'] = 'equaltech/EqualTechController/viewPerfilEqualTech/$1';
$route['perfil-instrutor/(:any)'] = 'sistema/InstrutorController/viewPerfilInstrutor/$1';
$route['perfil-funcionario/(:any)'] = 'sistema/FuncionarioController/viewPerfilFuncionario/$1';
$route['perfil-administrador/(:any)'] = 'sistema/AdministradorController/viewPerfilAdministrador/$1';

// ROTAS PARA OS CADASTROS
$route['cadastrar-aluno'] = 'sistema/AlunoController/viewCadastrarEditarAluno';
$route['cadastrar-treino'] = 'sistema/TreinoController/viewCadastrarEditarTreino';
$route['cadastrar-academia'] = 'sistema/AcademiaController/viewCadastrarEditarAcademia';
$route['cadastrar-instrutor'] = 'sistema/InstrutorController/viewCadastrarEditarInstrutor';
$route['cadastrar-funcionario'] = 'sistema/FuncionarioController/viewCadastrarEditarFuncionario';
$route['cadastrar-administrador'] = 'sistema/AdministradorController/viewCadastrarEditarAdministrador';

// ROTAS PARA AS EDIÇÕES
$route['editar-aluno/(:any)'] = 'sistema/AlunoController/viewCadastrarEditarAluno/$1';
$route['editar-treino/(:any)'] = 'sistema/TreinoController/viewCadastrarEditarTreino/$1';
$route['editar-equaltech/(:any)'] = 'equaltech/EqualTechController/viewEditarEqualTech/$1';
$route['editar-academia/(:any)'] = 'sistema/AcademiaController/viewCadastrarEditarAcademia/$1';
$route['editar-instrutor/(:any)'] = 'sistema/InstrutorController/viewCadastrarEditarInstrutor/$1';
$route['editar-funcionario/(:any)'] = 'sistema/FuncionarioController/viewCadastrarEditarFuncionario/$1';
$route['editar-administrador/(:any)'] = 'sistema/AdministradorController/viewCadastrarEditarAdministrador/$1';

// ROTAS PARA A EQUALTECH
$route['loginEqualtech'] = 'equaltech/LoginController';