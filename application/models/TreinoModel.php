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
        $this->db->where('idUsuario', $dadosTreino['idUsuario']);
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

    // FUNÇÕES PARA OS EXERCÍCIOS DO TREINO
    // FUNÇÃO PARA REALIZAR A INSERÇÃO DAS INFORMAÇÕES DO  EXERCÍCIO DO TREINO NO BANCO
    public function mCadastrarExercicioTreino($dadosExercicioTreino) {
        return $this->db->insert('exerciciostreino', $dadosExercicioTreino);
    }
    
    // FUNÇÃO PARA EXCLUIR AS INFORMAÇÕES DOS EXERCICIOS DO TREINO DO BANCO
    public function mExcluirExerciciosTreino($idTreino) {
        $this->db->where('idTreino', $idTreino);
        return $this->db->delete('exerciciostreino');
    }

    // FUNÇÕES PARA OS EXERCÍCIOS
    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExerciciosTreino($idTreino) {
        $this->db->select('*');
        $this->db->from('exerciciostreino');
        $this->db->join('exercicios', 'exerciciostreino.idExercicio = exercicios.idExercicio');
        $this->db->where('md5(idTreino)', $idTreino);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExercicios() {
        $this->db->select('*');
        $this->db->from('exercicios');
        $this->db->order_by('grupoMuscular', 'ASC');
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExerciciosSelecionados($idExercicio) {
        $this->db->select('*');
        $this->db->from('exercicios');
        $this->db->where('idExercicio', $idExercicio);
        return $this->db->get()->result();
    }

}
