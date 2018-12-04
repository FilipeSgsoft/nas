<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	function __construct(){
		parent::__construct();
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
					$this->session->set_userdata('usuario', $retorno);
					$this->session->set_userdata('menu', $obterMenu);

					foreach($obterMenu as $key){
						if($key->modulo != "NULL"){
							redirect(base_url($key->modulo."/".$key->view));
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
