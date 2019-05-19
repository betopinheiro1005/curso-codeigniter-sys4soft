<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// =============================================================
class Geral extends CI_Controller {
    
    // =============================================================
    public function index(){ 
        
        //imagens dos hoteis
        $this->load->model('hoteis');        
        $dados['hoteis'] = $this->hoteis->imagensHoteis();
        
        $this->load->view('layout/cabecalho');
        $this->load->view('pagina_inicial', $dados);
        $this->load->view('layout/rodape');
    }

    // =============================================================
    public function hotel($id){

        $this->load->model('hoteis');

        $dados['hotel'] = $this->hoteis->dados_do_hotel($id);
        
        $this->load->view('layout/cabecalho');
        $this->load->view('pagina_hotel', $dados);
        $this->load->view('layout/rodape');
    }
}
