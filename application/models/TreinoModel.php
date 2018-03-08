<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoModel extends CI_Model {

    // FUNÇÕES PARA O TREINO
    // FUNÇÃO PARA REALIZAR A INSERÇÃO DAS INFORMAÇÕES DO TREINO NO BANCO
    public function mCadastrarTreino($dadosTreino) {
        return $this->db->insert('treinos', $dadosTreino);
    }

    // FUNÇÃO PARA ALTERAR AS INFORMAÇÕES DO TREINO NO BANCO
    public function mEditarTreino($dadosTreino) {
        $this->db->where('idTreino', $dadosTreino['idTreino']);
        return $this->db->update('treinos', $dadosTreino);
    }

    // FUNÇÃO PARA EXCLUIR AS INFORMAÇÕES DO TREINO DO BANCO
    public function mExcluirTreino($idTreino) {
        $this->db->where('idTreino', $idTreino);
        return $this->db->delete('treinos');
    }

    // FUNÇÃO PARA PEGAR OS DADOS DO TREINO
    public function mVisualizarTreino($idUsuario) {
        $this->db->select('*');
        $this->db->from('treinos');
        $this->db->where('md5(idTreino)', $idUsuario);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA ENCONTRAR O TREINO SALVO
    public function mEncontrarTreino($dadosTreino) {
        $this->db->select('*');
        $this->db->from('treinos');
        $this->db->where('idAluno', $dadosTreino['idAluno']);
        $this->db->where('idAcademia', $dadosTreino['idAcademia']);
        $this->db->where('dataTreino', $dadosTreino['dataTreino']);
        $this->db->where('horaTreino', $dadosTreino['horaTreino']);
        $this->db->where('statusTreino', $dadosTreino['statusTreino']);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA LISTAR OS TREINOS
    public function mListarTreinos() {
        $this->db->select('*');
        $this->db->from('treinos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('statusTreino', true);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA ENCONTRAR OS TREINOS DO ALUNO
    public function mEncontrarTreinosAluno($idAluno) {
        $this->db->select('*');
        $this->db->from('treinos');
        $this->db->where('md5(idAluno)', $idAluno);
        $this->db->where('statusTreino', true);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA SABER QUAIS DIAS DA SEMANA O ALUNO TREINA
    public function mDiasAlunoTreino($idAluno) {
        $this->db->select('domingo, segunda, terca, quarta, quinta, sexta, sabado');
        $this->db->from('treinos');
        $this->db->where('md5(idAluno)', $idAluno);
        $this->db->where('statusTreino', true);
        return $this->db->get()->result();
    }

}
