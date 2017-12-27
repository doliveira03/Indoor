<?php

class usuarios {
	public $db;

	public function __construct(){
		$this->db = new mysqli("localhost", "root", "", "indoor");
	}

	public function verificar($id){
		if($tudo = $this->db->query("SELECT admin FROM usuarios WHERE id = '{$id}' AND admin = 'sim'")){
			return $tudo;
		}else{
			return 0;
		}
	}
	public function criar($n, $u, $e, $t, $s, $a){
		$senha = md5($s);
		if($this->db->query("SELECT id FROM usuarios WHERE usuario = '{$u}'")){
			if($this->db->query("INSERT INTO usuarios (nome_completo, usuario, email, telefone, senha, admin) VALUES ('{$n}', '{$u}', '{$e}', '{$t}', '{$senha}', '{$a}')")){
				return 1;
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}

	public function deletar($dados){
		if($this->db->query("DELETE FROM usuarios WHERE id = '{$dados}' ")){
			return 1;
		}else{
			return 0;
		}
	}

	public function atualizarDados($n, $e, $t, $s, $id){
		if($this->db->query("UPDATE usuarios SET nome_completo = '{$n}', email = '{$e}', telefone = '{$t}', senha = '{$s}' WHERE id = '{$id}'")){
			return 1;
		}else{
			return 0;
		}
	}

	public function ver($dados){
		$id = htmlentities($dados, ENT_QUOTES);
		if($query = $this->db->query("SELECT * FROM vsitantes WHERE id = '{$id}' ")){
			return $query;
		}else{
			return 0;
		}
	}

	public function editarUsuario($ver){
		if($query = $this->db->query("SELECT * FROM usuarios WHERE id = '{$ver}'")){
			return $query;
		}else{
			return 0;
		}
	}	

	public function verAdmin(){
		if($query = $this->db->query("SELECT * FROM usuarios")){
			return $query;
		}else{
			return 0;
		}
	}

	public function login($nome, $senha){
		$nomeHtml = htmlentities($nome);
		$senhaMd5 = md5($senha);
		$query = $this->db->query("SELECT id FROM usuarios WHERE usuario = '{$nomeHtml}' AND senha = '{$senhaMd5}'");
		$fetch = $query->fetch_array(MYSQLI_ASSOC);

		if($fetch){
			setcookie("logado", 1, time()+3600000);
			setcookie("id", $fetch['id'], time()+3600000);
			return 1;

		}else{
			return 0;
		}
	}

	public function update($id, $n, $c, $r, $au, $da, $de, $te, $cr, $em, $ob, $fo, $true, $old){
		$nome = htmlentities($n);
		$cpf = htmlentities($c);
		$rg = htmlentities($r);
		$autorizado = htmlentities($au);
		$data = htmlentities($da);
		$destino = htmlentities($de);
		$telefone = htmlentities($te);
		$cracha = htmlentities($cr);
		$empresa = htmlentities($em);
		$observacao = htmlentities($ob);

		if($true == 1){
			$dir = "images/";
			$up = $dir.rand(100000, 100000000).basename($fo['name']);
			move_uploaded_file($fo['tmp_name'], $up);

			$foto = $up;			
	    }else{
	    	$foto = $old;
	    }

		
		if($this->db->query("UPDATE vsitantes SET nome = '{$nome}', cpf = '{$cpf}', rg = '{$rg}', autorizado = '{$autorizado}', data = '{$data}', destino = '{$destino}', telefone = '{$telefone}', cracha = '{$cracha}', empresa = '{$empresa}', observacao = '{$observacao}', foto = '{$foto}' WHERE id = '{$id}'")){
			return 1;
		}else{
			return 0;
		}
	}

	public function cadastrar($n, $c, $r, $au, $da, $de, $te, $cr, $em, $ob, $fo){
		$nome = htmlentities($n);
		$cpf = htmlentities($c);
		$rg = htmlentities($r);
		$autorizado = htmlentities($au);
		$data = htmlentities($da);
		$destino = htmlentities($de);
		$telefone = htmlentities($te);
		$cracha = htmlentities($cr);
		$empresa = htmlentities($em);
		$observacao = htmlentities($ob);

		$dir = "images/";
		$up = $dir.rand(100000, 100000000).basename($_FILES['imagem']['name']);

		move_uploaded_file($_FILES['imagem']['tmp_name'], $up);

		$foto = $up;
		
		if($this->db->query("INSERT INTO vsitantes (nome, cpf, rg, autorizado, data, destino, telefone, cracha, empresa, observacao, foto) VALUES ('{$nome}', '{$cpf}', '{$rg}', '{$autorizado}', '{$data}', '{$destino}', '{$telefone}', '{$cracha}', '{$empresa}', '{$observacao}', '{$foto}')")){
			return 1;
		}else{
			return 0;
		}
	}
	public function buscar($nome){
		$usuario = '%'.htmlentities($nome, ENT_QUOTES).'%';
		if($query = $this->db->query("SELECT id, nome, cpf, rg, foto FROM vsitantes WHERE nome LIKE '{$usuario}'")){
			return $query;
		}else{
			return 0;
		}
	}
}