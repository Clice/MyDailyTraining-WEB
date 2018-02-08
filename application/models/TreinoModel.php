<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoModel extends CI_Model {

    // FUNÇÃO PARA REALIZAR A INSERÇÃO DAS INFORMAÇÕES DO TREINO NO BANCO
    public function mCadastrarTreino($dadosUsuario) {
        return $this->db->insert('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA ALTERAR AS INFORMAÇÕES DO TREINO NO BANCO
    public function mEditarTreino($dadosUsuario) {
        $this->db->where('idUsuario', $dadosUsuario['idUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA EXCLUIR AS INFORMAÇÕES DO TREINO DO BANCO
    public function mExcluirTreino($idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->delete('usuarios');
    }

    // FUNÇÃO PARA PEGAR OS DADOS DO TREINO
    public function mVisualizarTreino($idUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('md5(idUsuario)', $idUsuario);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExercicios() {
        $this->db->select('*');
        $this->db->from('exercicios');
        return $this->db->get()->result();
    }

}
