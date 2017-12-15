<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

	public function mLogarUsuario($dadosLoginUsuario) {
		$this->db->select('idUsuario, statusUsuario, tipoConta');
		$this->db->where('loginUsuario', $dadosLoginUsuario['loginUsuario']);
        $this->db->where('senhaUsuario', $dadosLoginUsuario['senhaUsuario']);
        return $this->db->get('usuarios')->result();
	}

}
