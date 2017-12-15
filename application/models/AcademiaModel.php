<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaModel extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

    public function mCadastrarAcademia($dadosAcademia) {
    	return $this->db->insert('academias', $dadosAcademia);
    }

    public function mEditarAcademia($dadosAcademia) {
    	$this->db->where('idAcademia', $dadosAcademia['idAcademia']);
        return $this->db->update('academias', $dadosAcademia);
    }

    public function listarUltimasPublicacoes() {
        $this->db->select('usuario.id as idAutor, '
                . 'usuario.nome, '
                . 'postagens.id, '
                . 'postagens.titulo, '
                . 'postagens.subtitulo, '
                . 'postagens.user, '
                . 'postagens.data, '
                . 'postagens.img');
        $this->db->from('postagens');
        $this->db->join('usuario', 'usuario.id = postagens.user');
        $this->db->limit(4);
        $this->db->order_by('postagens.data', 'DESC');
        return $this->db->get()->result();
    }

}
