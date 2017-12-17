<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function mLogarUsuario($dadosLogin) {
        $this->db->select('*');
        $this->db->where('loginUsuario', $dadosLogin['loginUsuario']);
        $this->db->where('senhaUsuario', base64_encode($dadosLogin['senhaUsuario']));
        return $this->db->get('usuarios')->result();
    }

}
