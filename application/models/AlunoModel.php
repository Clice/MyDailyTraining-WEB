<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
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

}
