<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoModel extends CI_Model {

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
    
    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExercicios() {
        $this->db->select('*');
        $this->db->from('exercicios');
        return $this->db->get()->result();
    }

}
