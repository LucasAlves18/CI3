<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function inserir($p){
        return $this->db->insert('user',$p); 
    }
    
    function deletar($id){
        $this->db->where('idusuario',$id);
        return $this->db->delete('user');
    }
    
    function editar($id){
        $this->db->where('idusuario',$id);
        $result = $this->db->get('user');
        return $result->result();
    }
    
    function atualizar($p){
        $this->db->where('idusuario',$p['idusuario']);
        $this->db->set($p);
        return $this->db->update('user');
    }

    function listar(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('nomeUsuario','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
