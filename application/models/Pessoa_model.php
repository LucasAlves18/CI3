<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function inserir($p){
        return $this->db->insert('pessoa',$p);
    }
    
    function deletar($id){
        $this->db->where('idPessoa',$id);
        return $this->db->delete('pessoa');
    }
    
    function editar($id){
        $this->db->where('idPessoa',$id);
        $result = $this->db->get('pessoa');
        return $result->result();
    }
    
    function atualizar($p){
        $this->db->where('idPessoa',$p['idPessoa']);
        $this->db->set($p);
        return $this->db->update('pessoa');
    }

    function listar(){
        $this->db->select('*');
        $this->db->from('pessoa');
        $this->db->order_by('nome','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
