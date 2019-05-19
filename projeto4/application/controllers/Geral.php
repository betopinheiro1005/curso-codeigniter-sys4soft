<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pagina1');
		$this->load->view('layout/rodape');
	}

	public function pagina2()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pagina2');
		$this->load->view('layout/rodape');
	}

	public function pagina3()
	{
		$this->load->view('layout/cabecalho');
		$this->load->view('pagina3');
		$this->load->view('layout/rodape');
	}

}
