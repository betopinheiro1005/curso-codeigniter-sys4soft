<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    class Basedados extends CI_Model{
    
        // ==================================================
        public function reset(){
            //faz um reset da base de dados

            //elimina todos os dados das tabelas
            $this->db->empty_table('usuarios');
            $this->db->empty_table('produtos');

            //recomeça o AUTO_INCREMENT
            $this->db->query('ALTER TABLE usuarios AUTO_INCREMENT = 1');
            $this->db->query('ALTER TABLE produtos AUTO_INCREMENT = 1');
            $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
        }

        // ==================================================
        public function inserir_usuarios(){
            //limpa a tabela dos usuários
            $this->db->empty_table('usuarios');
            $this->db->query('ALTER TABLE usuarios AUTO_INCREMENT = 1');

            //insere usuarios na base de dados
            $dados = array(
                    'usuario'   => 'admin',
                    'senha'     => md5('admin')
                    );
            $this->db->insert('usuarios', $dados);
            $dados = [
                'usuario'   => 'ana',
                'senha'     => md5('ana')
            ];
            $this->db->insert('usuarios', $dados);
            
            $dados = [
                'usuario'   => 'rui',
                'senha'     => md5('rui')
            ];
            $this->db->insert('usuarios', $dados);
        }    

        // ==================================================
        public function inserir_produtos(){
            
            //insere alguns produtos na base de dados
            //primeiro apaga os dados da tabela dos produtos e coloca o auto_increment em 1
            $this->db->empty_table('produtos');
            $this->db->query('ALTER TABLE produtos AUTO_INCREMENT = 1');
            
            $dados = array( 
                        ['designacao' => 'CPUs'             , 'quantidade' => 10], 
                        ['designacao' => 'Memórias'         , 'quantidade' => 20], 
                        ['designacao' => 'Monitores'        , 'quantidade' => 30], 
                        ['designacao' => 'Discos rígidos'   , 'quantidade' => 40], 
                    );
            $this->db->insert_batch('produtos', $dados);

            //adiciona 10 produtos de cada um destes elementos
            //limpa a base de dados dos movimentos
            $this->db->empty_table('movimentos');
            $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
            $dados = array(
                [
                    'id_produto'    => 1,
                    'quantidade'    => 10,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 2,
                    'quantidade'    => 20,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 3,
                    'quantidade'    => 30,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 4,
                    'quantidade'    => 40,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
            );
            $this->db->insert_batch('movimentos',$dados);
        }
    }
?>