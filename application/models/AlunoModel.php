<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function mCadastrarAluno($dadosAluno) {
        return $this->db->insert('alunos', $dadosAluno);
    }

    public function mEditarAluno($dadosAluno) {
        $this->db->where('idAluno', $dadosAluno['idAluno']);
        return $this->db->update('alunos', $dadosAluno);
    }

    public function mExcluirAluno($idAluno) {
        $this->db->where('idAluno', $idAluno);
        return $this->db->delete('alunos');
    }

    public function mBloquearAluno($idAluno) {
        $dadosAluno['statusAluno'] = false;
        $this->db->where('idAluno', $idAluno);
        return $this->db->update('alunos', $dadosAluno);
    }

    public function mDesbloquearAluno($idAluno) {
        $dadosAluno['statusAluno'] = true;
        $this->db->where('idAluno', $idAluno);
        return $this->db->update('alunos', $dadosAluno);
    }

    public function mVisualizarPerfilAluno($idAluno) {
        $this->db->select('*');
        $this->db->from('alunos');
        $this->db->where('idAluno', $idAluno);
        return $this->db->get()->result();
    }

    public function mListarAlunosAtivos() {
        $this->db->select('idAluno, nomeAluno, enderecoAluno, telefoneAluno, cpfAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('statusAluno', true);
        return $this->db->get()->result();
    }

    public function mListarAlunosBloqueados() {
        $this->db->select('idAluno, nomeAluno, enderecoAluno, telefoneAluno, cpfAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('statusAluno', false);
        return $this->db->get()->result();
    }

    public function mVerificarCPF($cpfAluno) {
        $this->db->from('alunos');
        $this->db->where('cpfAluno', $cpfAluno);
        return $this->db->get()->result();
    }
}