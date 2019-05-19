<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    class Usuarios extends CI_Model{
    
        // ==================================================
        public function verificar_login(){
            //verifica se os dados introduzidos no quadro de login são válidos

            //--------------------------------------------
            //MÉTODO COM QUERY BUILDER
            $resultado = $this->db->from('usuarios')
                                  ->where('usuario', $this->input->post('text_usuario'))
                                  ->where('senha', md5($this->input->post('text_senha')))
                                  ->get();            


            //--------------------------------------------

            if($resultado->num_rows()==0){
                //login inválido
                return false;
            } else {
                //login válido

                //abre a sessão com os dados do usuario
                $dados_usuario = $resultado->row();
                $this->session->set_userdata('id_usuario',$dados_usuario->id_usuario);
                $this->session->set_userdata('usuario',$dados_usuario->usuario);                
                return true;
            }
        }    
    }
?>