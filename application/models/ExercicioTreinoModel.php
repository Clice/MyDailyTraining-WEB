<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ExercicioTreinoModel extends CI_Model {

    ////////// FUNÇÃO PARA OS EXERCICIOSTREINO
    // FUNÇÃO PARA REALIZAR A INSERÇÃO DAS INFORMAÇÕES DO  EXERCÍCIO DO TREINO NO BANCO
    public function mCadastrarExercicioTreino($dadosExercicioTreino) {
        return $this->db->insert('exerciciostreino', $dadosExercicioTreino);
    }

    // FUNÇÃO PARA REALIZAR A ATUALIZAÇÃO DAS INFORMAÇÕES DO  EXERCÍCIO DO TREINO NO BANCO
    public function mEditarExercicioTreino($dadosExercicioTreino) {
        $this->db->where('idExercicioTreino', $dadosExercicioTreino['idExercicioTreino']);
        return $this->db->update('exerciciostreino', $dadosExercicioTreino);
    }

    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExerciciosTreino($idTreino) {
        $this->db->select('*');
        $this->db->from('exerciciostreino');
        $this->db->join('exercicios', 'exerciciostreino.idExercicio = exercicios.idExercicio');
        $this->db->where('md5(idTreino)', $idTreino);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA EXCLUIR AS INFORMAÇÕES DOS EXERCICIOS DO TREINO DO BANCO
    public function mExcluirExerciciosTreino($idTreino) {
        $this->db->where('idTreino', $idTreino);
        return $this->db->delete('exerciciostreino');
    }

    ////////// FUNÇÕES PARA OS EXERCÍCIOS
    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS
    public function mVisualizarExercicios() {
        $this->db->select('*');
        $this->db->from('exercicios');
        $this->db->order_by('grupoMuscular', 'ASC');
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR OS DADOS DOS EXERCÍCIOS SELECIONADOS
    public function mVisualizarExerciciosSelecionados($idExercicio) {
        $this->db->select('*');
        $this->db->from('exercicios');
        $this->db->where('idExercicio', $idExercicio);
        return $this->db->get()->result();
    }

    ////////// FUNÇÕES PARA OS EXERCÍCIOS TREINO
    // FUNÇÃO PARA PEGAR OS DADOS DO EXERCÍCIO DO TREINO
    public function mVisualizarExercicioTreino($idTreino, $idExercicio) {
        $this->db->select('*');
        $this->db->from('exerciciostreino');
        $this->db->where('idExercicio', $idExercicio);
        $this->db->where('idTreino', $idTreino);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA EXCLUIR OS DADOS DO EXERCÍCIO DO TREINO
    public function mExcluirExercicioTreino($idExercicioTreino) {
        $this->db->where('idExercicioTreino', $idExercicioTreino);
        return $this->db->delete('exerciciostreino');
    }

}
