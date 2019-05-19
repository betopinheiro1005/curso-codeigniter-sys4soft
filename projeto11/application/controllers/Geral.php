<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Geral extends CI_Controller{

        // ==================================================
        public function index(){

            //no caso de existir uma sessão ativa, apresenta o menu inicial
            if($this->session->has_userdata('id_usuario')){
                $this->menuInicial();
            } else {
                $this->quadroLogin();
            }
        }

        // ==================================================
        public function quadroLogin(){
            //se existir uma sessão ativa, salta para o quadro do menu inicial
            if($this->session->has_userdata('id_usuario')){
                $this->menuInicial();
            }

            $this->load->view('layout/_header');
            $this->load->view('layout/cabecalho');

            $this->load->view('usuarios/login');

            $this->load->view('layout/rodape');
            $this->load->view('layout/_footer');
        }

        // ==================================================        
        public function menuInicial(){
            //apresenta o menu inicial, no caso de existir uma sessão ativa
            if(!$this->session->has_userdata('id_usuario')){
                $this->quadroLogin();
            } else {
                redirect('gestao/home');
            }                    
        }

        // ==================================================
        public function verificarLogin(){
            //verifica se foi feito corretamente o login
            if($this->session->has_userdata('id_usuario')){
                $this->menuInicial();
            } else {
                //vai verificar se foi feito o login corretamente
                $this->load->model('usuarios');
                if($this->usuarios->verificar_login()){
                    $this->menuInicial();
                } else {
                    //login inválido
                    $this->loginInvalido();
                }
            }
        }

        // ==================================================        
        public function loginInvalido(){
            //apresenta uma mensagem a informar que o login está incorreto
            if($this->session->has_userdata('id_usuario')){
                $this->menuInicial();
            } else {
                $this->load->view('layout/_header');
                $this->load->view('layout/cabecalho');
                $dados = [
                    'mensagem'  => 'Login inválido.',
                    'tipo'      => 'danger',
                    'link'      => 'geral'
                ];
                $this->load->view('layout/mensagem', $dados);
                $this->load->view('usuarios/login');
                $this->load->view('layout/rodape');
                $this->load->view('layout/_footer');
            }
        }

        // ==================================================        
        public function logout(){
            //executa o logout do usuário
            if($this->session->has_userdata('id_usuario')){

                //remove os dados da sessão
                $this->session->unset_userdata('id_usuario');
                $this->session->unset_userdata('usuario');
            }

            //volta ao quadro de login
            $this->menuInicial();
        }

        // ==================================================
        public function setup(){
            $this->load->view('layout/_header');
            $this->load->view('setup/setup');
            $this->load->view('layout/_footer');
        }

        // ==================================================
        public function resetdb(){
            //limpar todos os dados da base de dados
            $this->load->model('basedados');
            $this->basedados->reset();

            //apresenta a view
            $this->load->view('layout/_header');
            $this->load->view('setup/setup');
            
            $dados = [
                'mensagem'  => 'Sistema de base de dados reiniciado com sucesso.',
                'tipo'      => 'success',
            ];
            $this->load->view('layout/mensagem', $dados);  
            $this->load->view('layout/_footer');
        }

        // ==================================================
        public function inserirusuarios(){
            //inserir 3 usuários na base de dados
            $this->load->model('basedados');
            $this->basedados->inserir_usuarios();

            //apresenta a view
            $this->load->view('layout/_header');
            $this->load->view('setup/setup');
            
            $dados = [
                'mensagem'  => 'Inseridos 3 usuários com sucesso.',
                'tipo'      => 'success',
            ];
            $this->load->view('layout/mensagem', $dados);  
            $this->load->view('layout/_footer');
        }

        // ==================================================
        public function inserirprodutos(){
            //insere produtos na base de dados
            $this->load->model('basedados');
            $this->basedados->inserir_produtos();

            $this->load->view('layout/_header');
            $this->load->view('setup/setup');
            $dados = [
                'mensagem'  => 'Inseridos produtos com sucesso.',
                'tipo'      => 'success',
            ];
            $this->load->view('layout/mensagem', $dados);            
            $this->load->view('layout/_footer');
        }        
    }

?>