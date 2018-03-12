<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// ROTA PARA O CONTROLLER INICIAL
$route['default_controller'] = 'InicialController';
$route['404_override'] = 'InicialController/vError404';
$route['translate_uri_dashes'] = FALSE;

// ROTAS PARA OUTROS CONTROLLERS
// ROTAS DE LOGIN E PARA A PÁGINA PRINCIPAL
$route['login'] = 'InicialController/vLogin';
$route['pagina-principal'] = 'PrincipalController';
$route['recuperar-senha'] = 'InicialController/vRecuperarSenha';

// ROTAS PARA O RELATÓRIO, PERFIL E NOTIFICAÇÕES
$route['relatorio'] = 'PrincipalController/vRelatorio';
$route['meus-dados'] = 'PrincipalController/vMeusDados';
$route['notificacoes'] = 'PrincipalController/vNotificacoes';

// ROTAS PARA AS LISTAS
$route['lista-alunos'] = 'AlunoController';
$route['lista-academias'] = 'AcademiaController';
$route['lista-equaltech'] = 'EqualTechController';
$route['lista-instrutores'] = 'InstrutorController';
$route['lista-funcionarios'] = 'FuncionarioController';
$route['lista-administradores'] = 'AdministradorController';
$route['lista-exercicios-treino/(:any)'] = 'TreinoController/vListaExerciciosTreino/$1';
$route['lista-administradores-academia'] = 'AdministradorController/vListaAdministradoresAcademia';

// ROTAS PARA OS PERFIS
$route['perfil-treino/(:any)'] = 'TreinoController/vPerfilTreino/$1';
$route['perfil-aluno/(:any)'] = 'TreinoAlunoController/vPerfilAluno/$1';
$route['perfil-academia/(:any)'] = 'AcademiaController/vPerfilAcademia/$1';
$route['perfil-equaltech/(:any)'] = 'EqualTechController/vPerfilEqualTech/$1';
$route['perfil-instrutor/(:any)'] = 'InstrutorController/vPerfilInstrutor/$1';
$route['perfil-funcionario/(:any)'] = 'FuncionarioController/vPerfilFuncionario/$1';
$route['perfil-administrador/(:any)'] = 'AdministradorController/vPerfilAdministrador/$1';

// ROTAS PARA OS CADASTROS
$route['cadastrar-aluno/(:any)'] = 'AlunoController/vCadastrarEditarAluno/$1';
$route['cadastrar-academia/(:any)'] = 'AcademiaController/vCadastrarEditarAcademia/$1';
$route['cadastrar-instrutor/(:any)'] = 'InstrutorController/vCadastrarEditarInstrutor/$1';
$route['cadastrar-treino/(:any)/(:any)'] = 'TreinoController/vCadastrarEditarTreino/$1/$2';
$route['cadastrar-funcionario/(:any)'] = 'FuncionarioController/vCadastrarEditarFuncionario/$1';
$route['cadastrar-avaliacao-fisica/(:any)'] = 'AvaliacaoFisicaController/vCadastrarAvaliacaoFisica/$1';
$route['cadastrar-exercicios-treino/(:any)/(:any)/(:any)'] = 'TreinoController/vCadastrarEditarExerciciosTreino/$1/$2/$3';
$route['cadastrar-administrador/(:any)/(:num)'] = 'AdministradorController/vCadastrarEditarAdministrador/$1/$2';

// ROTAS PARA AS EDIÇÕES
$route['editar-aluno/(:any)'] = 'AlunoController/vCadastrarEditarAluno/$1';
$route['editar-equaltech/(:any)'] = 'EqualTechController/vEditarEqualTech/$1';
$route['editar-academia/(:any)'] = 'AcademiaController/vCadastrarEditarAcademia/$1';
$route['editar-instrutor/(:any)'] = 'InstrutorController/vCadastrarEditarInstrutor/$1';
$route['editar-treino/(:any)/(:any)'] = 'TreinoController/vCadastrarEditarTreino/$1/$2';
$route['editar-funcionario/(:any)'] = 'FuncionarioController/vCadastrarEditarFuncionario/$1';
$route['editar-exercicios-treino/(:any)'] = 'TreinoController/vCadastrarEditarExerciciosTreino/$1';
$route['editar-administrador/(:any)/(:num)'] = 'AdministradorController/vCadastrarEditarAdministrador/$1/$2';