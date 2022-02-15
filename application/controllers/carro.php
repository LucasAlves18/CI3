<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author jairb
 */
class Carro extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Carro_model', 'carro');
        //'pessoa' é um alias/apelido para 'Pessoa_model'
    }

    public function index() {
        $dados['carro'] = $this->carro->listar();
        $this->load->view('carroCadastro', $dados);
    }

    public function editar($id) {
        $dados['carro'] = $this->carro->editar($id);
        $this->load->view('carroEditar', $dados);
    }

    public function inserir() {
        //este lado do BD = Este lado da View/Form
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $result = $this->carro->inserir($dados);
        if($result == true){
            redirect('carro');
        }else{
            redirect('carro');
        }
    }
    
    public function excluir($id) {
        $result = $this->carro->deletar($id);
        if($result == true){
            redirect('carro');
        }else{
            redirect('carro');
        }
    }
   
    public function atualizar() {
        $dados['idCarro'] = $this->input->post('idCarro');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa'] = $this->input->post('idPessoa');

        if($this->carro->atualizar($dados) == true){
            redirect('carro');
        }else{
            redirect('carro');
        }
    }

}