<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoFisioterapeutica extends MX_Controller {

	public function index()
	{
        $param = array(
            'title' => 'Avaliação Fisioteraupêutica',
            'view' => 'AvaliacaoFisioterapeutica/index'
        );
		$this->load->view('includes/core', $param);
	}
}
