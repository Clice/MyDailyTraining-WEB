<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/Fortaleza');

class InstrutorModel extends CI_Model {

    // FUNÇÃO PARA BUSCAR TODOS OS INSTRUTORES DESBLOQUEADOS
    public function mListarInstrutoresAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario, cpfUsuario, tipoConta, statusConta');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS OS INSTRUTORES BLOQUEADOS
    public function mListarInstrutoresBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario, cpfUsuario, tipoConta, statusConta');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS OS INSTRUTORES
    public function mListarTodosInstrutores() {
        $this->db->select('idUsuario, nomeUsuario, enderecoUsuario, telefoneUsuario, cpfUsuario, tipoConta, statusConta');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS OS CHAMADOS
    public function mListarChamadosInstrutores($idInstrutor) {
        $dataAtual = date("Y-m-d");

        $this->db->select('*');
        $this->db->from('chamados');
        $this->db->where('idUsuario', $this->session->userdata('idUsuario'));
        $this->db->where('dataChamado', $dataAtual);
        $this->db->join('alunos', 'chamados.idAluno = alunos.idAluno');
        $this->db->order_by('horarioChamado', 'DESC');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS OS CHAMADOS
    public function mListaChamadosInstrutores($idInstrutor) {
        $dataAtual = date("Y-m-d");

        $this->db->select('*');
        $this->db->from('chamados');
        $this->db->where('idUsuario', $this->session->userdata('idUsuario'));
        $this->db->where('dataChamado', $dataAtual);
        $this->db->join('alunos', 'chamados.idAluno = alunos.idAluno');
        $this->db->order_by('horarioChamado', 'ASC');
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE INSTRUTORES DESBLOQUEADOS
    public function mQtdInstAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE INSTRUTORES BLOQUEADOS
    public function mQtdInstBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }

}
