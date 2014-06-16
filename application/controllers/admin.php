<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function change_usrn(){
		$this->load->database();
		$id = $_POST['id'];
		$usrnw = $_POST['usrnew'];
		$this->db->query("UPDATE admin_users SET user_name = '".$usrnw."' WHERE id = '".$id."'");
	}
	public function crear_user(){
		$this->load->database();
		
		
		
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$desc = $_POST['desc'];
	$cargo = $_POST['cargo'];
	
	$this->db->query("INSERT INTO admin_users(user_name,email,password,nombre,apellido,descripcion,cargo) values('".$username."','".$email."','".$password."','".$nombre."','".$apellidos."','".$desc."','".$cargo."')");

		
	
	}
	public function change_cargo(){
		$this->load->database();
		$id = $_POST['id'];
		$cargo = $_POST['cargo'];
		$this->db->query("UPDATE admin_users SET cargo = '".$cargo."' WHERE id = '".$id."'");
	}
	
		public function change_desc(){
		$this->load->database();
		$id = $_POST['id'];
		$desc = $_POST['desc'];
		$this->db->query("UPDATE admin_users SET descripcion = '".$desc."' WHERE id = '".$id."'");
	}	
	
	public function change_email(){
		$this->load->database();
		$id = $_POST['id'];
		$email = $_POST['email'];
		$this->db->query("UPDATE admin_users SET email = '".$email."' WHERE id = '".$id."'");
	}	
	public function marcar_leido(){
		session_start(); 
		$this->load->database();
		$nombreadmin = $_SESSION['MM_Adminname'];
		$id_correo = $_POST['id'];
		 $this->db->query('UPDATE correos SET leido = "1", leidopor = "'.$nombreadmin.'" WHERE correos.id = '.$id_correo.'');
		
		echo 'Leido correctamente '.$nombreadmin;
	}
	public function cerrar_sesion(){
	session_start();
		session_destroy();		
	}
	
	public function eliminar_usr(){
		$this->load->database();
		$id = $_POST['id'];
		$this->db->query("DELETE from admin_users where ID = ".$id."");
	
		header("location: edit_users");
	}
	public function edit_users(){
	session_start(); 
		$this->load->database();
		$rescatar_admins = $this->db->query("SELECT * from admin_users");
		$data['edit_users'] = $rescatar_admins->result_array();
	
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/edit_users',$data);
	}
	public function bandeja_entrada(){
	 session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
					  header('location: login');

			
		 }else{ 
	error_reporting(0);
		$this->load->database();
		$rescatar_correos = $this->db->query("SELECT * from correos");
		$data['correos'] = $rescatar_correos->result_array();
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/bandeja_entrada',$data);
		}
	}
	public function login(){
	 	
	
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/admin_login');	
		
		
		if (isset($_POST['entrar'])) {

			$loginNombreUsuario= $_POST['user'];	
			$password=$_POST['str_password'];
			$this->load->database();
			$query1 = $this->db->query("SELECT * FROM admin_users WHERE user_name = '$loginNombreUsuario' AND password = '$password'");
   
			$results = $query1->result_array();
  
			
			if (count($results) != 0){
				$_SESSION['MM_Adminname'] = $loginNombreUsuario;
				echo '<script>alert("Bienvenido '.$results[0]['nombre'].'");window.location.href="home";</script>';
				
			}
			else{
				echo "<script>alert('Error en la identificación')</script>";
			}
	}

	}
	public function lista_users_admin(){
	session_start();
	if (!isset($_SESSION['MM_Adminname'])){
				  header('location: login');

	}
	$this->load->database();
			$rescatar_admins = $this->db->query("SELECT * from admin_users");
		$data['lista_admins'] = $rescatar_admins->result_array();
			$this->load->view('admin/cuerpo_central');
			$this->load->view('admin/lista_users_admin',$data);
	}
	 public function home()
	{	
		 session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
		 	
		  header('location: login');
			
			
		 }else{
			 
		 
		$this->load->helper('autoload');
		
		error_reporting(0);
		
		$this->load->database();
		$query1 = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%AMI%' and comment_status = 'open' order by post_date DESC");
		$queryresu1 = $query1->result_array();
		
		$repet_alquileres = 0;
		for ($a = 0; $a <= count($queryresu1);$a++){
		
		if ($queryresu1[$a]['post_title'] == $queryresu1[$a-1]['post_title']){
				$repet_alquileres = $repet_alquileres+1;
				continue;
			}
		}
		
		
		$query2 = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%VMI%' and comment_status = 'open' order by post_date DESC");
		$queryresu2 = $query2->result_array();
		
		$repet_ventas = 0;
		for ($a = 0; $a <= count($queryresu2);$a++){
		
		if ($queryresu2[$a]['post_title'] == $queryresu2[$a-1]['post_title']){
				$repet_ventas = $repet_ventas+1;
				continue;
			}
		}
		
		
		$query3 = $this->db->query("SELECT * from admin_users");
		$queryresu3 = $query3->result_array();
		
		$query4 = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%P%' and comment_status = 'open' order by post_date DESC");
		$queryresu4 = $query4->result_array();
		$repet_proyectos = 0;
		for ($a = 0; $a <= count($queryresu4);$a++){
		
		if ($queryresu4[$a]['post_title'] == $queryresu4[$a-1]['post_title']){
				$repet_proyectos = $repet_proyectos+1;
				continue;
			}
		}
		
		$query5 = $this->db->query("SELECT * from correos");
		$queryresu5 = $query5->result_array();
		
		$query6 = $this->db->query("SELECT * from correos where leido = '0'");
		$queryresu6 = $query6->result_array();
		
		
		$diadehoy = date("d/m/Y");
		$query7 = $this->db->query("SELECT * from visitas where fecha = '$diadehoy'");
		$queryres7 = $query7->result_array();
		$queryresu7 = split(',',$queryres7[0]['ips']);
		
		
		$data['visitas_hoy'] = count($queryresu7);
		$data['correo_no_leido'] = count($queryresu6);
		$data['correo_leido'] = count($queryresu5);
		$data['proyectos'] = count($queryresu4) - $repet_proyectos;
		$data['usuarios'] = count($queryresu3);
		$data['ventas'] = count($queryresu2) - $repet_ventas;
		$data['alquileres'] = count($queryresu1) - $repet_alquileres;
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/admin_home',$data);	
			}
		
	}
	 public function index()
	{	
		 session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
			 		  header('location: login');

		 }else{
		$this->load->helper('autoload');
		
		
				
		
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/admin_home',$data);	
		}
	
	}
	public function user_list(){
		  session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
					  header('location: login');

		 }else{
		$this->load->helper('autoload');
				
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/user_list',$data);
		}
	}
		public function prof_list(){
		 session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
			 		  header('location: login');

		 }else{
		$this->load->helper('autoload');
		$conexionSQL = new MySQL();
		
		$ssql = "SELECT tbl_empresa.id_empresa, tbl_empresa.str_cif, tbl_empresa.str_localidad, tbl_empresa.str_provincia FROM tbl_empresa";
		$Datos_empresa = $conexionSQL->paginar($ssql);
		$row_Datos_empresa = $conexionSQL->resultados($Datos_empresa);
		$data['Datos_empresa'] = $Datos_empresa;
		$data['row_Datos_empresa'] = $row_Datos_empresa;		
		
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/prof_list',$data);
		}
	}
	public function prof_info(){
		  session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
					  header('location: login');

		 }else{
		$this->load->helper('autoload');
				
		$conexionSQL = new MySQL();

		/*SELECCION DE DATOS DE USUARIO*/
		$var_empresa_datos_empresa = "0";
		if (isset($_GET["prof"])) {
		  $var_empresa_datos_empresa = $_GET["prof"];
		}
		
		$ssql = sprintf("SELECT * FROM tbl_empresa WHERE tbl_empresa.id_empresa = %s", CleanSQL::Sanear($var_empresa_datos_empresa, "int"));
		$datos_empresa = $conexionSQL->ejecutar($ssql);
		$row_datos_empresa = $conexionSQL->resultados($datos_empresa);
		/*ACTUALIZACION DE INFORMACION DE EMPRESA*/
				$data['datos_empresa'] = $datos_empresa;
		$data['row_datos_empresa'] = $row_datos_empresa;
		
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/prof_info',$data);
		}
	}
	public function user_info(){
		  session_start(); 
		 if (!isset($_SESSION['MM_Adminname'])){
			 echo "No tienes permiso";
		 }else{
		$this->load->helper('autoload');
			

		$conexionSQL = new MySQL();
		
		/*SELECCION DE DATOS DE USUARIO*/
		$var_usuario_datos_usuario = "0";
		if (isset($_GET["user"])) {
		  $var_usuario_datos_usuario = $_GET["user"];
		}
		
		$ssql = sprintf("SELECT * FROM tbl_usuario WHERE tbl_usuario.id_usuario = %s", CleanSQL::Sanear($var_usuario_datos_usuario, "int"));
		$datos_usuario = $conexionSQL->ejecutar($ssql);
		$row_datos_usuario = $conexionSQL->resultados($datos_usuario);
		$data['conexionSQL'] = $conexionSQL;
			  $data['datos_usuario'] = $datos_usuario;
		  $data['row_datos_usuario'] = $row_datos_usuario;
		  $data['$var_usuario_datos_usuario '] = $var_usuario_datos_usuario ;
		$this->load->view('admin/cuerpo_central');
		$this->load->view('admin/user_info',$data);}
	}
	

}