<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carro_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function inserir($p){
        return $this->db->insert('carro',$p);
    }
    
    function deletar($id){
        $this->db->where('idCarro',$id);
        return $this->db->delete('carro');
    }
    
    function editar($id){
        $this->db->where('idCarro',$id);
        $result = $this->db->get('carro');
        return $result->result();
    }
    
    function atualizar($p){
        $this->db->where('idCarro',$p['idCarro']);
        $this->db->set($p);
        return $this->db->update('carro');
    }

    function listar(){
        $this->db->select('*');
        $this->db->from('carro');
        $this->db->order_by('marca','ASC');
        $this->db->order_by('modelo','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}