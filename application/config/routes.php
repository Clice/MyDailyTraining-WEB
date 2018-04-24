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
$route['faq'] = 'InicialController/vFAQ';
$route['documentos'] = 'InicialController/vDocumentos';
$route['termo-de-uso'] = 'InicialController/vTermoDeUso';

// ROTAS PARA O RELATÓRIO, PERFIL E NOTIFICAÇÕES
$route['relatorio'] = 'PrincipalController/vRelatorio';
$route['meus-dados'] = 'PrincipalController/vMeusDados';
$route['notificacoes'] = 'PrincipalController/vNotificacoes';
$route['imprimir-ficha/(:any)'] = 'AlunoController/vImprimirFichaTreino/$1';
$route['imprimir-relatorio/(:any)/(:any)'] = 'PrincipalController/vImprimirRelatorio/$1/$2';

// ROTAS PARA AS LISTAS
$route['lista-alunos'] = 'AlunoController';
$route['lista-academias'] = 'AcademiaController';
$route['lista-equaltech'] = 'EqualTechController';
$route['lista-instrutores'] = 'InstrutorController';
$route['lista-funcionarios'] = 'FuncionarioController';
$route['lista-administradores'] = 'AdministradorController';
$route['lista-chamados/(:any)'] = 'InstrutorController/vListaChamados/$1';
$route['lista-exercicios-treino/(:any)'] = 'TreinoController/vListaExerciciosTreino/$1';
$route['lista-administradores-academia'] = 'AdministradorController/vListaAdministradoresAcademia';

// ROTAS PARA OS PERFIS
$route['perfil-treino/(:any)'] = 'TreinoController/vPerfilTreino/$1';
$route['perfil-aluno/(:any)'] = 'AlunoController/vPerfilAluno/$1';
$route['perfil-academia/(:any)'] = 'AcademiaController/vPerfilAcademia/$1';
$route['perfil-equaltech/(:any)'] = 'EqualTechController/vPerfilEqualTech/$1';
$route['perfil-instrutor/(:any)'] = 'InstrutorController/vPerfilInstrutor/$1';
$route['perfil-funcionario/(:any)'] = 'FuncionarioController/vPerfilFuncionario/$1';
$route['perfil-administrador/(:any)'] = 'AdministradorController/vPerfilAdministrador/$1';

// ROTAS PARA OS CADASTROS
$route['cadastrar-aluno/(:any)'] = 'AlunoController/vCadastrarAluno/$1';
$route['cadastrar-academia/(:any)'] = 'AcademiaController/vCadastrarAcademia/$1';
$route['cadastrar-instrutor/(:any)'] = 'InstrutorController/vCadastrarInstrutor/$1';
$route['cadastrar-treino/(:any)/(:any)'] = 'TreinoController/vCadastrarTreino/$1/$2';
$route['cadastrar-funcionario/(:any)'] = 'FuncionarioController/vCadastrarFuncionario/$1';
$route['cadastrar-avaliacao-fisica/(:any)'] = 'AvaliacaoFisicaController/vCadastrarAvaliacaoFisica/$1';
$route['cadastrar-exercicios-treino/(:any)/(:any)/(:any)'] = 'TreinoController/vCadastrarEditarExerciciosTreino/$1/$2/$3';
$route['cadastrar-administrador/(:any)/(:num)/(:any)'] = 'AdministradorController/vCadastrarEditarAdministrador/$1/$2/$3';

// ROTAS PARA AS EDIÇÕES
$route['editar-aluno/(:any)/(:any)'] = 'AlunoController/vEditarAluno/$1/$2';
$route['editar-equaltech/(:any)/(:any)'] = 'EqualTechController/vEditarEqualTech/$1/$2';
$route['editar-academia/(:any)/(:any)'] = 'AcademiaController/vEditarAcademia/$1/$2';
$route['editar-instrutor/(:any)/(:any)'] = 'InstrutorController/vEditarInstrutor/$1/$2';
$route['editar-treino/(:any)/(:any)'] = 'TreinoController/vEditarTreino/$1/$2';
$route['editar-funcionario/(:any)/(:any)'] = 'FuncionarioController/vEditarFuncionario/$1/$2';
$route['editar-exercicios-treino/(:any)'] = 'TreinoController/vCadastrarEditarExerciciosTreino/$1';
$route['editar-administrador/(:any)/(:num)/(:any)'] = 'AdministradorController/vCadastrarEditarAdministrador/$1/$2/$3';
