<?php
if(!defined('BASEPATH'))
	exit('No direct script access allowed');

class LoginModel extends CI_Model
{
	function __construct(){
		parent::__construct();
	}

    public function autenticar($data){
        $sql = "SELECT u.id,u.usuario,u.nome,p.nome as perfil FROM usuario u
        left join perfil_menu pm on pm.id_perfil=u.id
        left JOIN perfil p on p.id=pm.id_perfil WHERE u.usuario='".$data['usuario']."' and u.senha='".$data['senha']."'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){$data = $query->result();return $data;}else{return false;}
    }

    
	public function ObterMenu($id_usuario){
		$sql = "SELECT m.* FROM menu m
                LEFT JOIN perfil_menu pm on pm.id_menu=m.id
                LEFT JOIN usuario_perfil up on pm.id_perfil=up.id_perfil
                WHERE up.id_usuario=".$id_usuario;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){$data = $query->result();return $data;}else{return false;}
	}

}
?>
