<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoOncologica extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Avaliação Oncológica',
            'view' => 'AvaliacaoOncologica/index'
        );
		$this->load->view('includes/core', $param);
	}
}
