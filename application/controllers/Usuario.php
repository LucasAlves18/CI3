<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
           redirect('Login');
        } elseif ($this->session->userdata('logado')->perfilAcesso == 'user') {
            redirect('home');
        }
        $this->load->model('Usuario_model', 'usuario');
        //'usuario' é um alias/apelido para 'Usuario_model'
    }

    public function index() {
        $dados['users'] = $this->usuario->listar();
        $this->load->view('usuarioCadastro', $dados);
    }

    public function inserir() {
        //este lado do BD = Este lado da View/Form
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = mb_convert_case($this->input->post('user'), MB_CASE_LOWER);
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha'), MB_CASE_LOWER));
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
       
        $result = $this->usuario->inserir($dados);
        if($result == true){
            redirect('usuario');
        }else{
            redirect('usuario');
        }
    }
    
    public function excluir($id) {
        $result = $this->usuario->deletar($id);
        if($result == true){
            //msg true
            redirect('usuario');
        }else{
            //msg err
            redirect('usuario');
        }
    }
    
    public function editar($id) {
        $dados['user'] = $this->usuario->editar($id);
        $this->load->view('usuarioEditar', $dados);
    }
    
    public function atualizar() {
        //este lado do BD = Este lado da View/Form
        $dados['idusuario'] = $this->input->post('idusuario');
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = mb_convert_case($this->input->post('user'), MB_CASE_LOWER);
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
        
        if($this->usuario->atualizar($dados) == true){
            //msg true
            redirect('usuario');
        }else{
            //msg err
            redirect('usuario');
        }
    }

}
