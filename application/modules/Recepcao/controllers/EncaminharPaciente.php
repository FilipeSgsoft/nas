<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EncaminharPaciente extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Cadastrar Paciente',
            'view' => 'EncaminharPaciente/index'
        );
		$this->load->view('includes/core', $param);
	}
}
