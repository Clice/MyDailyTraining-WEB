<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoFisicaModel extends CI_Model {

    // FUNÇÃO PARA INSERIR OS DADOS PASSADOS PELO USUÁRIO NO BANCO
    public function mCadastrarAvaliacaoFisicaAluno($dadosAvaliacao) {
        return $this->db->insert('avaliacoesfisicas', $dadosAvaliacao);
    }

}
