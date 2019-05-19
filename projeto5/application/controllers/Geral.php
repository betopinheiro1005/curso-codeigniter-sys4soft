<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {
    
    public function index(){
        $this->load->view('layout/cabecalho');
        $this->load->view('layout/rodape');
    }

    public function p2($nome){

        echo $nome;

        $this->load->view('layout/cabecalho');                    
        $this->load->view('layout/rodape');

    }

    public function p3($nome, $idade = 30){

        echo $nome . ' - ' . $idade;


        $this->load->view('layout/cabecalho');
        $this->load->view('layout/rodape');
    }

}
