<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoModel extends CI_Model {

    public function listar_alunos_ativos() {
        $this->db->select('idAluno, nomeAluno, telefoneAluno, cpfAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('statusAluno = false');
        return $this->db->get()->result();
    }

    public function listar_alunos_bloqueados() {
        $this->db->select('idAluno, idAcademia, nomeAluno, dataNascimentoAluno, idadeAluno, cpfAluno, rgAluno, emailAluno,
            sexoAluno, senhaAluno, telefoneAluno, enderecoAluno, estadoAluno, cidadeAluno, bairroAluno, cepAluno, 
            objetivoAluno, dataValidadeExame, nomeResponsavelAlun, telefoneResponsavelAluno, statusAluno, cirurgias,	
            medicamentos, doencasFamiliaresAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('statusAluno = true');
        return $this->db->get()->result();
    }

}
