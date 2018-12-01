<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoNeurologica extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Avaliação Neurologica',
            'view' => 'AvaliacaoNeurologica/index'
        );
		$this->load->view('includes/core', $param);
	}
}
