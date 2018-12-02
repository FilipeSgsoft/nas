<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AtenderPaciente extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Atendimento Paciente',
            'view' => 'AtenderPaciente/index'
        );
		$this->load->view('includes/core', $param);
	}
}
