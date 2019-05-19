<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Geral extends CI_Controller{

        // ============================================
        public function index(){
            //apresenta o formulário
            $this->load->view('formulario');
        }

        // ============================================
        public function tratarFormulario(){
            //trata o formulário depois de submetido

            // $dados['contacto'] = $this->input->post();
            // $this->load->view('apresentar_dados', $dados);
            
            echo "Nome: " . $this->input->post('text_nome') . "<br>";
            echo "Telefone: " . $this->input->post('text_telefone');
        }

    }

?>