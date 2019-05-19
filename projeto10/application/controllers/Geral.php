<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {
	
	// ===========================================
	public function index()
	{
		//carregar os dados da base de dados
		$query = $this->db->query('SELECT * FROM contactos');
		$temp['dados'] = $query->result_array();

		//apresentação da view
		$this->load->view('inicio', $temp);
	}

	// ===========================================
	public function gravar(){
		//guardados os dados na base de dados
		$valores = [
			$this->input->post('text_nome'),
			$this->input->post('text_telefone')
		];

		//guardar os dados na base de dados
		$this->db->query('INSERT INTO contactos(nome, telefone) VALUES(?,?)',$valores);
		redirect('geral');
	}
}
