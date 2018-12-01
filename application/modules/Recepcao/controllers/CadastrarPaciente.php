<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarPaciente extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Cadastrar Paciente',
            'view' => 'CadastrarPaciente/index'
        );
		$this->load->view('includes/core', $param);
	}
}
