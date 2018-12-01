<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoOrtopedica extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Avaliação Ortopédica',
            'view' => 'AvaliacaoOrtopedica/index'
        );
		$this->load->view('includes/core', $param);
	}
}
