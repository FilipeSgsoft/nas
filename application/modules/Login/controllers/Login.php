<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function autenticar(){
		try{
			$data = $this->input->post();
			$retorno = $this->LoginModel->autenticar($data);
			if($retorno){
				$obterMenu = $this->LoginModel->ObterMenu($retorno[0]->id);
				if($obterMenu){
					$param = array(
						'usuario' => $data['usuario'],
						'logged' => true
					);
					$this->session->set_userdata('usuario', $param);
					$this->session->set_userdata('menu', $obterMenu);
					foreach($obterMenu as $key){
						if($key->url != ""){
							redirect(base_url($key->url));
							break;
						}
					}
				}else{
					redirect($this->index());
				}
			}else{
				redirect($this->index());
			}
		}catch(Exception $e){
			echo 'Erro: '.$e->getMessage();
		}
	}

}
