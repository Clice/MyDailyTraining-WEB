<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinosAlunoModel extends CI_Model {

    // FUNÇÃO PARA DEFINIR O TREINO NO BANCO DE DADOS
    public function mDefinirTreinoAluno($dadosTreinoAluno) {
        return $this->db->insert('treinosaluno', $dadosTreinoAluno);
    }

    // FUNÇÃO PARA ENCONTRAR O DEFINIR TREINO DO ALUNO CADASTRADO 
    public function mEncontrarDefinirTreinoAluno($dadosTreinoAluno) {
        $this->db->select('idTreinoAluno');
        $this->db->from('treinosaluno');
        $this->db->where('dataTreinoAluno', $dadosTreinoAluno['dataTreinoAluno']);
        $this->db->where('horaTreinoAluno', $dadosTreinoAluno['horaTreinoAluno']);
        $this->db->where('diasTreinoAluno', $dadosTreinoAluno['diasTreinoAluno']);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA ENCONTRAR O TREINO DO ALUNO CADASTRADO 
    public function mEncontrarTreinoAluno($idAluno) {
        $this->db->select('idTreinoAluno');
        $this->db->from('treinosaluno');
        $this->db->where('idAluno', $idAluno);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA CONTAR A QUANTIDADE TOTAL DE ALUNOS DA ACADEMIA
    public function mDefinirIdTreinoAluno($idTreino, $dadosTreinoAluno) {
        $this->db->where('idTreino', $idTreino);
        return $this->db->update('treinos', $dadosTreinoAluno);
    }

}
