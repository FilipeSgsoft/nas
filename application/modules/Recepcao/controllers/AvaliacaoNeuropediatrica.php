<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoNeuropediatrica extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Avaliação Neuroppediátrica',
            'view' => 'AvaliacaoNeuropediatrica/index'
        );
		$this->load->view('includes/core', $param);
	}
}
