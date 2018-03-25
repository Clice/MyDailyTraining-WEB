<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalController extends CI_Controller {

    // CONSTRUTOR DO USUÁRIO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('UsuarioModel');
            $this->load->model('AcademiaModel');
            $this->load->model('InstrutorModel');
            $this->load->model('FuncionarioModel');
            $this->load->model('AdministradorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PAGINA-PRINCIPAL.PHP
    public function index() {
        $dados['nomePagina'] = 'Página Principal';
        $dados['qtdAcademiasAtivas'] = count($this->AcademiaModel->mQtdAcademiasAtivas(0));
        $dados['qtdAcademiasBloqueadas'] = count($this->AcademiaModel->mQtdAcademiasBloqueadas(0));
        $dados['qtdAdminAtivos'] = count($this->AdministradorModel->mQtdAdminAtivos($this->session->userdata('idAcademia')));
        $dados['qtdAdminBloqueados'] = count($this->AdministradorModel->mQtdAdminBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdFuncAtivos'] = count($this->FuncionarioModel->mQtdFuncAtivos($this->session->userdata('idAcademia')));
        $dados['qtdFuncBloqueados'] = count($this->FuncionarioModel->mQtdFuncBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdInstAtivos'] = count($this->InstrutorModel->mQtdInstAtivos($this->session->userdata('idAcademia')));
        $dados['qtdInstBloqueados'] = count($this->InstrutorModel->mQtdInstBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdAlunosAtivos'] = count($this->AlunoModel->mQtdAlunosAtivos($this->session->userdata('idAcademia')));
        $dados['qtdAlunosBloqueados'] = count($this->AlunoModel->mQtdAlunosBloqueados($this->session->userdata('idAcademia')));

        if ($this->session->userdata('tipoConta') == 4) {
            $dados['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/pagina-principal');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL.PHP
    public function vMeusDados() {
        $dados['nomePagina'] = 'Meus Dados';

        if ($this->session->userdata('tipoConta') == 1) {
            $dados['urlPagina'] = 'editar-equaltech/' . md5($this->session->userdata('idUsuario'));
        } else if ($this->session->userdata('tipoConta') == 2) {
            $dados['urlPagina'] = 'editar-administrador/' . md5($this->session->userdata('idUsuario')) . '/' . $this->session->userdata('idAcademia');
        } else if ($this->session->userdata('tipoConta') == 3) {
            $dados['urlPagina'] = 'editar-funcionario/' . md5($this->session->userdata('idUsuario'));
        } else if ($this->session->userdata('tipoConta') == 4) {
            $dados['urlPagina'] = 'editar-instrutor/' . md5($this->session->userdata('idUsuario'));
            $dados['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/meus-dados');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW NOTIFICACOES.PHP
    public function vNotificacoes() {
        $dados['nomePagina'] = 'Notificações';

        if ($this->session->userdata('tipoConta') == 4) {
            $dados['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/notificacoes');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RELARORIO.PHP
    public function vRelatorio() {
        $dados['nomePagina'] = 'Relatório';

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/relatorio');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RELARORIO.PHP
    public function vImprimirRelatorio($tipoConta, $statusConta) {
        $academia = get_object_vars($this->AcademiaModel->mVisualizarPerfilAcademia(md5($this->session->userdata('idAcademia')))[0]);
        $dadosRelatorio['nomeAcademia'] = $academia['nomeAcademia'];
        $dadosRelatorio['tipoConta'] = $tipoConta;
        $dadosRelatorio['statusConta'] = $statusConta;

        if ($tipoConta == "3") {
            $nomeUsuario = "Funcionários";
            $dadosRelatorio['informacoes'] = $this->cGerarRelatorioFuncionarios($statusConta);
        } else if ($tipoConta == "4") {
            $nomeUsuario = "Instrutores";
            $dadosRelatorio['informacoes'] = $this->cGerarRelatorioInstrutores($statusConta);
        } else if ($tipoConta == "5") {
            $nomeUsuario = "Alunos";
            $dadosRelatorio['informacoes'] = $this->cGerarRelatorioAlunos($statusConta);
        } else if ($tipoConta == "Todos") {
            $dadosRelatorio['informacoes'] = $this->cGerarRelatorioTodos($statusConta);

            if ($statusConta == "true") {
                $dadosRelatorio['titulo'] = $tipoConta . " os usuários - Ativos";
            } else if ($statusConta == "false") {
                $dadosRelatorio['titulo'] = $tipoConta . " os usuários - Bloqueados";
            } else {
                $dadosRelatorio['titulo'] = $tipoConta . " os usuários";
            }
        }

        if ($tipoConta != "Todos") {
            if ($statusConta == "true") {
                $dadosRelatorio['titulo'] = $nomeUsuario . " - Ativos";
            } else if ($statusConta == "false") {
                $dadosRelatorio['titulo'] = $nomeUsuario . " - Bloqueados";
            } else {
                $dadosRelatorio['titulo'] = $nomeUsuario;
            }
        }

        $dadosRelatorio['nomePagina'] = $dadosRelatorio['nomeAcademia'] . " - Relatório - " . $dadosRelatorio['titulo'];

        $this->load->view('sistema/templates/html-header', $dadosRelatorio);
        $this->load->library('Pdf');
        $this->pdf->load_view('sistema/telas/imprimir-relatorio');
        $this->pdf->render();
        $this->pdf->stream($dadosRelatorio['nomePagina'] . ".pdf", array("Attachment" => false));
    }

    // FUNÇÃO CONTROLLER PARA GERAR RELATÓRIO DE TODOS OS STATUS
    public function cGerarRelatorioTodos($statusConta) {
        $dadosRelatorio = array();

        if ($statusConta == "Todos") {
            if (count($this->AlunoModel->mListarTodosAlunos()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarTodosAlunos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarTodosAlunos()[$i]));
                }
            }

            if (count($this->InstrutorModel->mListarTodosInstrutores()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarTodosInstrutores()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarTodosInstrutores()[$i]));
                }
            }

            if (count($this->FuncionarioModel->mListarTodosFuncionarios()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarTodosFuncionarios()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarTodosFuncionarios()[$i]));
                }
            }
        } else if ($statusConta == "true") {
            if (count($this->AlunoModel->mListarAlunosAtivos()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarAlunosAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarAlunosAtivos()[$i]));
                }
            }

            if (count($this->InstrutorModel->mListarInstrutoresAtivos()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarInstrutoresAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarInstrutoresAtivos()[$i]));
                }
            }

            if (count($this->FuncionarioModel->mListarFuncionariosAtivos()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarFuncionariosAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarFuncionariosAtivos()[$i]));
                }
            }
        } else if ($statusConta == "false") {
            if (count($this->AlunoModel->mListarAlunosBloqueados()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarAlunosBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarAlunosBloqueados()[$i]));
                }
            }

            if (count($this->InstrutorModel->mListarInstrutoresBloqueados()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarInstrutoresBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarInstrutoresBloqueados()[$i]));
                }
            }

            if (count($this->FuncionarioModel->mListarFuncionariosBloqueados()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarFuncionariosBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarFuncionariosBloqueados()[$i]));
                }
            }
        }

        return $dadosRelatorio;
    }

    // FUNÇÃO CONTROLLER PARA GERAR RELATÓRIO DE TODOS OS FUNCIONÁRIOS
    public function cGerarRelatorioFuncionarios($statusConta) {
        $dadosRelatorio = array();

        if ($statusConta == "Todos") {
            if (count($this->FuncionarioModel->mListarTodosFuncionarios()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarTodosFuncionarios()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarTodosFuncionarios()[$i]));
                }
            }
        } else if ($statusConta == "true") {
            if (count($this->FuncionarioModel->mListarFuncionariosAtivos()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarFuncionariosAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarFuncionariosAtivos()[$i]));
                }
            }
        } else if ($statusConta == "false") {
            if (count($this->FuncionarioModel->mListarFuncionariosBloqueados()) > 0) {
                for ($i = 0; $i < count($this->FuncionarioModel->mListarFuncionariosBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->FuncionarioModel->mListarFuncionariosBloqueados()[$i]));
                }
            }
        }

        return $dadosRelatorio;
    }

    // FUNÇÃO CONTROLLER PARA GERAR RELATÓRIO DE TODOS OS INSTRUTORES
    public function cGerarRelatorioInstrutores($statusConta) {
        $dadosRelatorio = array();

        if ($statusConta == "Todos") {
            if (count($this->InstrutorModel->mListarTodosInstrutores()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarTodosInstrutores()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarTodosInstrutores()[$i]));
                }
            }
        } else if ($statusConta == "true") {
            if (count($this->InstrutorModel->mListarInstrutoresAtivos()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarInstrutoresAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarInstrutoresAtivos()[$i]));
                }
            }
        } else if ($statusConta == "false") {
            if (count($this->InstrutorModel->mListarInstrutoresBloqueados()) > 0) {
                for ($i = 0; $i < count($this->InstrutorModel->mListarInstrutoresBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->InstrutorModel->mListarInstrutoresBloqueados()[$i]));
                }
            }
        }

        return $dadosRelatorio;
    }

    // FUNÇÃO CONTROLLER PARA GERAR RELATÓRIO DE TODOS OS ALUNOS
    public function cGerarRelatorioAlunos($statusConta) {
        $dadosRelatorio = array();

        if ($statusConta == "Todos") {
            if (count($this->AlunoModel->mListarTodosAlunos()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarTodosAlunos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarTodosAlunos()[$i]));
                }
            }
        } else if ($statusConta == "true") {
            if (count($this->AlunoModel->mListarAlunosAtivos()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarAlunosAtivos()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarAlunosAtivos()[$i]));
                }
            }
        } else if ($statusConta == "false") {
            if (count($this->AlunoModel->mListarAlunosBloqueados()) > 0) {
                for ($i = 0; $i < count($this->AlunoModel->mListarAlunosBloqueados()); $i++) {
                    array_push($dadosRelatorio, get_object_vars($this->AlunoModel->mListarAlunosBloqueados()[$i]));
                }
            }
        }

        return $dadosRelatorio;
    }

}
