<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioController extends CI_Controller {

    // CONSTRUTOR DO USUÁRIO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
        } else {
            redirect(base_url('404_override'));
        }
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
            'statusConta' => $this->input->post('statusConta')
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
                if ($this->session->userdata('idUsuario') == $dadosUsuario['idUsuario']) {
                    $this->session->set_userdata($dadosUsuario);
                }
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO USUÁRIO
    public function cVisualizarUsuario() {
        $idUsuario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mVisualizarUsuario($idUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
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

    // FUNÇÃO CONTROLLER PARA VERIFICAR O LOGIN
    public function cVerificarLogin() {
        $loginUsuario = base64_encode($this->input->post('loginUsuario'));

        $dadosUsuario = $this->UsuarioModel->mVerificarLogin($loginUsuario);

        if (count($dadosUsuario) >= 1) {
            $dadosUsuario = get_object_vars($this->UsuarioModel->mVerificarLogin($loginUsuario)[0]);
            $resposta = array('existe' => true, 'id' => $dadosUsuario['idUsuario']);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfUsuario = $this->input->post('cpfUsuario');

        $dadosUsuario = $this->UsuarioModel->mVerificarCPF($cpfUsuario);

        if (count($dadosUsuario) >= 1) {
            $dadosUsuario = get_object_vars($this->UsuarioModel->mVerificarCPF($cpfUsuario)[0]);
            $resposta = array('existe' => true, 'id' => $dadosUsuario['idUsuario']);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA ALTERAR A SENHA
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
