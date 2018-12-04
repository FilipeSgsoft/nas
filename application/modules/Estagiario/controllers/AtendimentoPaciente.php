<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AtendimentoPaciente extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Atendimento Paciente',
            'view' => 'AtendimentoPaciente/index'
        );
		$this->load->view('includes/core', $param);
	}
}
