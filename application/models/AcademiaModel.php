<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaModel extends CI_Model {

    // FUNÇÃO PARA INSERIR OS DADOS DA ACADEMIA NO BANCO
    public function mCadastrarAcademia($dadosAcademia) {
        return $this->db->insert('academias', $dadosAcademia);
    }

    // FUNÇÃO PARA EDITAR OS DADOS DA ACADEMIA
    public function mEditarAcademia($dadosAcademia) {
        $this->db->where('idAcademia', $dadosAcademia['idAcademia']);
        return $this->db->update('academias', $dadosAcademia);
    }

    // FUNÇÃO PARA EXCLUIR UMA ACADEMIA
    public function mExcluirAcademia($idAcademia) {
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->delete('academias');
    }

    // FUNÇÃO PARA EXCLUIR TODOS OS ALUNOS DE UMA ACADEMIA
    public function mExcluirTodosAlunos($idAcademia) {
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->delete('alunos');
    }

    // FUNÇÃO PARA EXCLUIR TODOS OS USUÁRIOS DE UMA ACADEMIA
    public function mExcluirTodosUsuarios($idAcademia) {
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->delete('usuarios');
    }

    // FUNÇÃO PARA BLOQUEAR UMA ACADEMIA
    public function mBloquearAcademia($idAcademia) {
        $dadosAcademia['statusAcademia'] = false;
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

    // FUNÇÃO PARA DESBLOQUEAR UMA ACADEMIA
    public function mDesbloquearAcademia($idAcademia) {
        $dadosAcademia['statusAcademia'] = true;
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

    // FUNÇÃO PARA VISUALIZAR DOS DADOS DE UMA ACADEMIA
    public function mVisualizarPerfilAcademia($idAcademia) {
        $this->db->select('*');
        $this->db->from('academias');
        $this->db->where('md5(idAcademia)', $idAcademia);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR TODAS AS ACADEMIAS DESBLOQUEADAS
    public function mListarAcademiasAtivas() {
        $this->db->select('idAcademia, nomeAcademia, enderecoAcademia, 
            telefoneAcademia, cnpjAcademia');
        $this->db->from('academias');
        $this->db->where('statusAcademia', true);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR TODAS AS ACADEMIAS BLOQUEADAS
    public function mListarAcademiasBloqueadas() {
        $this->db->select('idAcademia, nomeAcademia, enderecoAcademia, 
            telefoneAcademia, cnpjAcademia');
        $this->db->from('academias');
        $this->db->where('statusAcademia', false);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA VERIFICAR SE O CNPJ DE UMA ACADEMIA JÁ FOI CADASTRADO
    public function mVerificarCNPJ($cnpjAcademia) {
        $this->db->select('idAcademia');
        $this->db->from('academias');
        $this->db->where('cnpjAcademia', $cnpjAcademia);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE ACADEMIAS DESBLOQUEADAS
    public function mQtdAcademiasAtivas($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAcademia', true);
        return $this->db->get('academias')->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE ACADEMIAS DESBLOQUEADAS
    public function mQtdAcademiasBloqueadas($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAcademia', false);
        return $this->db->get('academias')->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE ACADEMIAS QUE A 
    // ACADEMIA POSSUI E QUANTAS JÁ FORAM USADAS
    public function mQtdLicencasTotaisEUsadas($idAcademia) {
        $this->db->select('idAcademia, qtdTotalLicencas, qtdLicencasUsadas');
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->get('academias')->result();
    }
    
    // FUNÇÃO PARA SABER A QUANTIDADE DE ALUNOS DA ACADEMIA
    public function mVerificarQtdAlunos($idAcademia) {
        $this->db->select('qtdTotalLicencas, qtdLicencasUsadas');
        $this->db->where('idAcademia', $idAcademia); 
        return $this->db->get('academias')->result();
    }

    // FUNÇÃO PARA DIMINUIR ALUNOS DA ACADEMIA
    public function mDiminuirQtdAlunos($idAcademia, $qtdLicencasUsadas) {
        $dadosAcademia['qtdLicencasUsadas'] = $qtdLicencasUsadas;
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

}
