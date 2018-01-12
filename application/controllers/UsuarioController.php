<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LOGIN.PHP
    public function index() {
        $this->load->view('apresentacao/login');
    }

    // FUNÇÃO DE VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarUsuario() {
        // PEGANDO AS INFORMAÇÕES DE LOGIN E SENHA PASSADAS E COLOCANDO EM UM VETOR
        $dadosLogin = array(
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario')
        );

        // PASSANDO AS INFORMAÇÕES PARA A FUNÇÃO QUE FARÁ A VERIFICAÇÃO NO BANCO DE DADOS
        $dadosUsuario = $this->UsuarioModel->mLogarUsuario($dadosLogin);

        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS NA TABELA USUARIOS
        if (count($dadosUsuario) >= 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuarioLogado = get_object_vars($dadosUsuario[0]);

            // VERIFICANDO SE O STATUS DA ACADEMIA ESTÁ TRUE 
            // PARA QUE O USUÁRIO POSSA LOGAR
            $aux = $this->UsuarioModel->mVerificarStatusAcademia($dadosUsuarioLogado['idAcademia']);
            $dados = get_object_vars($aux[0]);

            // SE O STATUS ACADEMIA FOR TRUE
            if ($dados['statusAcademia'] == true) {
                // SE O STATUS DA CONTA ESTIVER TRUE, NÃO BLOQUEADO
                if ($dadosUsuarioLogado['statusConta'] == true) {
                    $this->session->set_userdata($dadosUsuarioLogado);
                    $resposta = array('success' => true);
                }
                // SE A CONTA FO USUÁRIO ESTIVER FALSE, BLOQUEADA
                else {
                    $resposta = array('success' => false, 'statusConta' => false);
                }
            }
            // SE O STATUS ACADEMIA FOR FALSE
            else {
                $resposta = array('success' => false, 'statusAcademia' => false);
            }
        }
        // SE NÃO HOUVER NENHUM USUÁRIO COM AS INFORMAÇÕES PASSADAS
        else {
            $resposta = array('success' => false);
        }

        // RETORNANDO AS FUNÇÃO JAVASCRIPT AS INFORMAÇÕES
        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR USUÁRIO
    public function cCadastrarEditarUsuario() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRO     
        $dadosUsuario = array(
            'idUsuario' => $this->input->post('idUsuario'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeUsuario'),
            'loginUsuario' => base64_encode($this->input->post('loginUsuario')),
            'senhaUsuario' => base64_encode($this->input->post('senhaUsuario')),
            'emailUsuario' => $this->input->post('emailUsuario'),
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'crefUsuario' => $this->input->post('crefUsuario'),
            'rgUsuario' => $this->input->post('rgUsuario'),
            'sexoUsuario' => $this->input->post('sexoUsuario'),
            'dataNascimentoUsuario' => $this->input->post('dataNascimentoUsuario'),
            'enderecoUsuario' => $this->input->post('enderecoUsuario'),
            'estadoUsuario' => $this->input->post('estadoUsuario'),
            'cidadeUsuario' => $this->input->post('cidadeUsuario'),
            'bairroUsuario' => $this->input->post('bairroUsuario'),
            'cepUsuario' => $this->input->post('cepUsuario'),
            'telefoneUsuario' => $this->input->post('telefoneUsuario'),
            'tipoConta' => $this->input->post('tipoConta'),
            'statusConta' => true
        );

        $dadosUsuario['idadeUsuario'] = calcularIdade($dadosUsuario['dataNascimentoUsuario']);

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO USUÁRIO
        if ($dadosUsuario['idUsuario'] == "novo") {
            if ($this->UsuarioModel->mCadastrarUsuario($dadosUsuario)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO USUÁRIO
        else {
            if ($this->UsuarioModel->mEditarUsuario($dadosUsuario)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR USUÁRIO
    public function cExcluirUsuario() {
        $idUsuario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mExcluirUsuario($idUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR USUÁRIO
    public function cBloquearUsuario() {
        $idUsuario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mBloquearUsuario($idUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR USUÁRIO
    public function cDesbloquearUsuario() {
        $idUsuario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mDesbloquearUsuario($idUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO USUÁRIO
    public function cVisualizarPerfilUsuario() {
        $idUsuario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mVisualizarPerfilUsuario($idUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfUsuario = $this->input->post('cpfUsuario');

        $dadosUsuario = $this->UsuarioModel->mVerificarCPF($cpfUsuario);

        if (count($dadosUsuario) >= 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O LOGIN
    public function cVerificarLogin() {
        $loginUsuario = base64_encode($this->input->post('loginUsuario'));

        $dadosUsuario = $this->UsuarioModel->mVerificarLogin($loginUsuario);

        if (count($dadosUsuario) >= 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW ALTERAR-SENHA.PHP
    public function cAlterarSenha() {
        $dadosUsuario = array(
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'senhaUsuario' => base64_encode($this->input->post('senhaUsuario'))
        );
        
        if ($this->UsuarioModel->mAlterarSenha($dadosUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }
        
        echo json_encode($resposta);
    }

}
