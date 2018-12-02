<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Atendimento Médico',
            'view' => 'Atendimento/index'
        );
		$this->load->view('includes/core', $param);
	}
}
