<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{

		$dados['nomes'] = ['João', 'Ana', 'Carlos'];

		$this->load->view('layout/cabecalho');
		$this->load->view('conteudo', $dados);
		$this->load->view('layout/rodape');
	}

}
