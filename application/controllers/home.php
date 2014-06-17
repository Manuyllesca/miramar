<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();

			if (!isset($_SESSION)){
			session_start();
			
			}
			
		
	}
	public function index()
	{
		error_reporting(0);
		$this->load->database();
		//$this->db->query()
		
		$diadehoy = date("d/m/Y");

		$ip = $_SERVER['REMOTE_ADDR'];
		$compro1 = $this->db->query('SELECT * from visitas where fecha ="'.$diadehoy.'"');
		$compro1_res = $compro1->result();
		if ($compro1_res == true){
			
			 $compro1_res_array = $compro1->result_array();
			$ipsactuales = $compro1_res_array[0]['ips'];
			$ipsactus = split(',',$ipsactuales);
			
			
				
								
									$this->db->query("UPDATE visitas SET ips = '$ipsactuales,$ip' WHERE fecha = '$diadehoy'");		
					
				
				
			
			
		}
		else{
			$this->db->query("INSERT INTO visitas(fecha,ips) values('$diadehoy','$ip')");
		}
		
		if (!isset($_SESSION)){
		
		$_SESSION['sess_tipo_propiedad'] = 'Alquiler';
		$_SESSION['zona'] = 'Cualquiera';
		$_SESSION['pag'] = '1';
		echo "cargo el alquiler";
		}
		
		echo $_SESSION['sess_tipo_propiedad'] ;
 		
		$data = array();
	
		$data['check_pages'] = $this->check_pages();
		
		if ($_SESSION['sess_tipo_propiedad'] == 'Alquiler'){
		$data['get_pag_alquiler'] = $this->get_pag_alquiler();
		}
		if ($_SESSION['sess_tipo_propiedad'] == 'Venta'){
		$data['get_pag_venta'] = $this->get_pag_venta();
		}
		$data['distrits'] =  array
			('Otros','Miraflores',
			'Barranco',
			'San Isidro'
			,'San Miguel'
			,'Chorrillos'
			,'Pueblo Libre');
			
		
		
		
		$this->load->view('home',$data);
		
	}
	public function busqueda_novedades()
	{
		
		error_reporting(0);
		$this->load->database();
		$query = $this->db->query("SELECT * from wp_posts where post_status in ('publish','inherit') and post_name like '%revision%' and comment_status = 'open' order by post_date DESC LIMIT 10");
		$var_posts = $query->result_array();
		echo $var_posts[0]['post_title'];
		echo $var_posts[1]['post_title'];
		echo $var_posts[2]['post_title'];
		echo $var_posts[3]['post_title'];
	}

	public function busqueda_alquileres_novedades()
	{
		error_reporting(0);
		if(!isset($_GET['alquiler_page'])){
			$_GET['alquiler_page'] = 1;
		}
		$maximo_num_novedades = 9;
		$this->load->database();
		$check_pages = $this->check_pages_from_funct();
		 $ini = $check_pages['ini'];
		 $fini = $check_pages['fini'];
		$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%AMI%' and comment_status = 'open' order by post_date DESC LIMIT $ini,$fini");
		
		$var_posts = $query->result_array();
	
		
		for ($a = 0;$a < $maximo_num_novedades; $a++){
			
			$post_original = $var_posts[$a]['ID'];
			$querymasinfo = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'baths_value'");
			$querymasinforesultados = $querymasinfo->result_array();
			$querymasinfo2 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'beds_value'");
			$querymasinforesultados2 = $querymasinfo2->result_array();
			$querymasinfo3 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'cars_value'");
			$querymasinforesultados3 = $querymasinfo3->result_array();
			$querymasinfo4 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'state_value'");
			$querymasinforesultados4 = $querymasinfo4->result_array();
			$querymasinfo5 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'area_value'");
			$querymasinforesultados5 = $querymasinfo5->result_array();
			$querymasinfo6 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'city_value'");
			$querymasinforesultados6 = $querymasinfo6->result_array();
			$querymasinfo7 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'referencias_value'");
			$querymasinforesultados7 = $querymasinfo7->result_array();
			$querymasinfo8 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'rob_value'");
			$querymasinforesultados8 = $querymasinfo8->result_array();
			$querymasinfo9 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'price_value'");
			$querymasinforesultados9 = $querymasinfo9->result_array();
			$querymasinfo10 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'mantenimiento_value'");
			$querymasinforesultados10 = $querymasinfo10->result_array();
			$querymasinfo11 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'nropiso_value'");
			$querymasinforesultados11 = $querymasinfo11->result_array();
			$querymasinfo12 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'salacomedor_value'");
			$querymasinforesultados12 = $querymasinfo12->result_array();
			$querymasinfo13 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'salastar_value'");
			$querymasinforesultados13 = $querymasinfo13->result_array();
			$querymasinfo14 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'balcon_value'");
			$querymasinforesultados14 = $querymasinfo14->result_array();
			$querymasinfo15 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'terraza_value'");
			$querymasinforesultados15 = $querymasinfo15->result_array();
			$querymasinfo16 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'cocina_value'");
			$querymasinforesultados16 = $querymasinfo16->result_array();
			$querymasinfo17 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'lavanderia_value'");
			$querymasinforesultados17 = $querymasinfo17->result_array();
			$querymasinfo18 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'areadeservicio_value'");
			$querymasinforesultados18 = $querymasinfo18->result_array();
			$querymasinfo19 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'ascensor_value'");
			$querymasinforesultados19 = $querymasinfo19->result_array();
			$querymasinfo20 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'deposito_value'");
			$querymasinforesultados20 = $querymasinfo20->result_array();
			$querymasinfo21 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'furnishing_value'");
			$querymasinforesultados21 = $querymasinfo21->result_array();
			
			$queryimg = $this->db->query("SELECT * from wp_posts where post_parent = '$post_original' and post_type = 'attachment' order by ID DESC LIMIT 1");
			$queryimgresultados = $queryimg->result_array();
			
			$descripcion = $var_posts[$a]['post_content'];
			if ($var_posts[$a]['post_title'] == $var_posts[$a+1]['post_title']){
				
				$maximo_num_novedades= $maximo_num_novedades+1;
				continue;
			}
			
			$posts[] = '<div class="pull-left result_busqueda_box" onclick="modal_up('.$post_original.');">		
				
				<textarea style="display:none" id="descripcion_'.$post_original.'">'.$descripcion.'
				</textarea>
				<input type="hidden" id="img_principal_pro_'.$post_original.'" value="'.$queryimgresultados[0]['guid'].'">
				<input type="hidden" id="baths_'.$post_original.'" value="'.$querymasinforesultados[0]['meta_value'].'">
				<input type="hidden" id="beds_'.$post_original.'" value="'.$querymasinforesultados2[0]['meta_value'].'">
				<input type="hidden" id="cars_'.$post_original.'" value="'.$querymasinforesultados3[0]['meta_value'].'">
				<input type="hidden" id="state_'.$post_original.'" value="'.$querymasinforesultados4[0]['meta_value'].'">
				<input type="hidden" id="aream2_'.$post_original.'"value="'.$querymasinforesultados5[0]['meta_value'].'">
				<input type="hidden" id="ciudad_'.$post_original.'"value="'.$querymasinforesultados6[0]['meta_value'].'">
				<input type="hidden" id="referencias_'.$post_original.'"value="'.$querymasinforesultados7[0]['meta_value'].'">
				<input type="hidden" id="tipo_propiedad_'.$post_original.'"value='.$querymasinforesultados8[0]['meta_value'].'>
				<textarea style="display:none" id="precio_'.$post_original.'">'.$querymasinforesultados9[0]['meta_value'].'</textarea>
				<textarea style="display:none" id="mantenimiento_propiedad_'.$post_original.'">'.$querymasinforesultados10[0]['meta_value'].'</textarea>
				<input type="hidden" id="nropiso_propiedad_'.$post_original.'"value='.$querymasinforesultados11[0]['meta_value'].'>
				<input type="hidden" id="salacomedor_propiedad_'.$post_original.'"value='.$querymasinforesultados12[0]['meta_value'].'>
				<input type="hidden" id="salastar_propiedad_'.$post_original.'"value='.$querymasinforesultados13[0]['meta_value'].'>
				<input type="hidden" id="balcon_propiedad_'.$post_original.'"value='.$querymasinforesultados14[0]['meta_value'].'>
				<input type="hidden" id="terraza_propiedad_'.$post_original.'"value='.$querymasinforesultados15[0]['meta_value'].'>
				<input type="hidden" id="cocina_propiedad_'.$post_original.'"value='.$querymasinforesultados16[0]['meta_value'].'>
				<input type="hidden" id="lavanderia_propiedad_'.$post_original.'"value='.$querymasinforesultados17[0]['meta_value'].'>
				<input type="hidden" id="areadeservicio_propiedad_'.$post_original.'"value='.$querymasinforesultados18[0]['meta_value'].'>
				<input type="hidden" id="ascensor_propiedad_'.$post_original.'"value='.$querymasinforesultados19[0]['meta_value'].'>
				<input type="hidden" id="deposito_propiedad_'.$post_original.'"value='.$querymasinforesultados20[0]['meta_value'].'>
				<input type="hidden" id="furnishing_propiedad_'.$post_original.'"value='.$querymasinforesultados21[0]['meta_value'].'>
				<input type="hidden" id="code_propiedad_'.$post_original.'"value='.$var_posts[$a]['post_title'].'>
				
	
			<div class="price_propiedad_icons"><div style="align:right;">Precio: '.$querymasinforesultados9[0]['meta_value'].' </div></div><img class="propiedad_img_prin"width=230px height=150px src='.$queryimgresultados[0]['guid'].'>	<div style="display:inline-block;width:62%;margin-bottom:10px;"><div class="pull-left"></img><small>COD:'.$var_posts[$a]['post_title'].'</small></div><div class="pull-right">'.$querymasinforesultados4[0]['meta_value'].'</div></div><br><div class="imgs_propiedad_icons"> <div class="pull-left mas_info_box_txt">+ Mas información</div><div class="pull-right" style="width:50%;">'.$querymasinforesultados[0]['meta_value'].' <img src="assets/img_principal/icon_shower.png" width="22" height="16">  '.$querymasinforesultados2[0]['meta_value'].' <img src="assets/img_principal/icon_bed.png" width="22" height="16">    '.$querymasinforesultados3[0]['meta_value']. '  <img src="assets/img_principal/icon_car.png" width="22" height="16"></div></div></div>';
					/*
			echo $var_posts[$a]['post_title'].'<br>';
			echo $var_posts[$a]['post_content'].'<br><br>';*/
		}
		for ($a = 0; $a < count($posts); $a++)
		{
		echo $posts[$a];
		}
	}
	
	public function distrito()
	{
		
		if ($_SESSION['sess_tipo_propiedad'] == 'Venta'){
			$data['distrito_query'] = $_POST['valor_distrito'];
			$query_distrito =  $_POST['valor_distrito'];
			
			$resultado = $this->busqueda_ventas_novedades($data);
			echo $resultado; 
		}
	}
	public function busqueda_ventas_novedades($data = 'distrito')
	{
		
			error_reporting(0);
		if(!isset($_GET['venta_page'])){
			$_GET['venta_page'] = 1;
		}
		
		
		$maximo_num_novedades = 9;
		$this->load->database();
		$check_pages = $this->check_pages_from_funct();
		 $ini = $check_pages['ini'];
		 $fini = $check_pages['fini'];
		
		 if($data == "d" or $_GET['venta_page'] != 1){
		$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%V%' and comment_status = 'open' order by post_date DESC LIMIT $ini,$fini");
		}
		else{
			$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%V%' and comment_status = 'open' order by post_date DESC");
		}
		$var_posts = $query->result_array();
		
	
		
		for ($a = 0;$a < $maximo_num_novedades; $a++){
			
			$post_original = $var_posts[$a]['ID'];
			$querymasinfo = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'baths_value'");
			$querymasinforesultados = $querymasinfo->result_array();
			$querymasinfo2 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'beds_value'");
			$querymasinforesultados2 = $querymasinfo2->result_array();
			$querymasinfo3 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'cars_value'");
			$querymasinforesultados3 = $querymasinfo3->result_array();
			$querymasinfo4 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'state_value'");
			$querymasinforesultados4 = $querymasinfo4->result_array();
			
		
			if ($data['distrito_query'] != "d"){
			if ($querymasinforesultados4[0]['meta_value'] != $data['distrito_query']){
				$maximo_num_novedades+1; 
				continue;
			}
			}
					
			$querymasinfo5 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'area_value'");
			$querymasinforesultados5 = $querymasinfo5->result_array();
			$querymasinfo6 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'city_value'");
			$querymasinforesultados6 = $querymasinfo6->result_array();
			$querymasinfo7 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'referencias_value'");
			$querymasinforesultados7 = $querymasinfo7->result_array();
			$querymasinfo8 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'rob_value'");
			$querymasinforesultados8 = $querymasinfo8->result_array();
			$querymasinfo9 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'price_value'");
			$querymasinforesultados9 = $querymasinfo9->result_array();
			$querymasinfo10 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'mantenimiento_value'");
			$querymasinforesultados10 = $querymasinfo10->result_array();
			$querymasinfo11 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'nropiso_value'");
			$querymasinforesultados11 = $querymasinfo11->result_array();
			$querymasinfo12 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'salacomedor_value'");
			$querymasinforesultados12 = $querymasinfo12->result_array();
			$querymasinfo13 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'salastar_value'");
			$querymasinforesultados13 = $querymasinfo13->result_array();
			$querymasinfo14 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'balcon_value'");
			$querymasinforesultados14 = $querymasinfo14->result_array();
			$querymasinfo15 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'terraza_value'");
			$querymasinforesultados15 = $querymasinfo15->result_array();
			$querymasinfo16 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'cocina_value'");
			$querymasinforesultados16 = $querymasinfo16->result_array();
			$querymasinfo17 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'lavanderia_value'");
			$querymasinforesultados17 = $querymasinfo17->result_array();
			$querymasinfo18 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'areadeservicio_value'");
			$querymasinforesultados18 = $querymasinfo18->result_array();
			$querymasinfo19 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'ascensor_value'");
			$querymasinforesultados19 = $querymasinfo19->result_array();
			$querymasinfo20 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'deposito_value'");
			$querymasinforesultados20 = $querymasinfo20->result_array();
			$querymasinfo21 = $this->db->query("SELECT * from wp_postmeta where post_id = '$post_original' and meta_key = 'furnishing_value'");
			$querymasinforesultados21 = $querymasinfo21->result_array();
			
			$queryimg = $this->db->query("SELECT * from wp_posts where post_parent = '$post_original' and post_type = 'attachment' order by ID DESC LIMIT 1");
			$queryimgresultados = $queryimg->result_array();
			
		
			
			$descripcion = $var_posts[$a]['post_content'];
		
			
				if ($var_posts[$a]['post_title'] == $var_posts[$a-1]['post_title']){
				
				$maximo_num_novedades= $maximo_num_novedades+1;
				continue;
			}
			
			
			$postsa[] = '<div class="pull-left result_busqueda_box" onclick="modal_up('.$post_original.');">		
				
				<textarea style="display:none" id="descripcion_'.$post_original.'">'.$descripcion.'
				</textarea>
				<input type="hidden" id="img_principal_pro_'.$post_original.'" value="'.$queryimgresultados[0]['guid'].'">
				<input type="hidden" id="baths_'.$post_original.'" value="'.$querymasinforesultados[0]['meta_value'].'">
				<input type="hidden" id="beds_'.$post_original.'" value="'.$querymasinforesultados2[0]['meta_value'].'">
				<input type="hidden" id="cars_'.$post_original.'" value="'.$querymasinforesultados3[0]['meta_value'].'">
				<input type="hidden" id="state_'.$post_original.'" value="'.$querymasinforesultados4[0]['meta_value'].'">
				<input type="hidden" id="aream2_'.$post_original.'"value="'.$querymasinforesultados5[0]['meta_value'].'">
				<input type="hidden" id="ciudad_'.$post_original.'"value="'.$querymasinforesultados6[0]['meta_value'].'">
				<input type="hidden" id="referencias_'.$post_original.'"value="'.$querymasinforesultados7[0]['meta_value'].'">
				<input type="hidden" id="tipo_propiedad_'.$post_original.'"value='.$querymasinforesultados8[0]['meta_value'].'>
				<textarea style="display:none" id="precio_'.$post_original.'">'.$querymasinforesultados9[0]['meta_value'].'</textarea>
				<textarea style="display:none" id="mantenimiento_propiedad_'.$post_original.'">'.$querymasinforesultados10[0]['meta_value'].'</textarea>
				<input type="hidden" id="nropiso_propiedad_'.$post_original.'"value='.$querymasinforesultados11[0]['meta_value'].'>
				<input type="hidden" id="salacomedor_propiedad_'.$post_original.'"value='.$querymasinforesultados12[0]['meta_value'].'>
				<input type="hidden" id="salastar_propiedad_'.$post_original.'"value='.$querymasinforesultados13[0]['meta_value'].'>
				<input type="hidden" id="balcon_propiedad_'.$post_original.'"value='.$querymasinforesultados14[0]['meta_value'].'>
				<input type="hidden" id="terraza_propiedad_'.$post_original.'"value='.$querymasinforesultados15[0]['meta_value'].'>
				<input type="hidden" id="cocina_propiedad_'.$post_original.'"value='.$querymasinforesultados16[0]['meta_value'].'>
				<input type="hidden" id="lavanderia_propiedad_'.$post_original.'"value='.$querymasinforesultados17[0]['meta_value'].'>
				<input type="hidden" id="areadeservicio_propiedad_'.$post_original.'"value='.$querymasinforesultados18[0]['meta_value'].'>
				<input type="hidden" id="ascensor_propiedad_'.$post_original.'"value='.$querymasinforesultados19[0]['meta_value'].'>
				<input type="hidden" id="deposito_propiedad_'.$post_original.'"value='.$querymasinforesultados20[0]['meta_value'].'>
				<input type="hidden" id="furnishing_propiedad_'.$post_original.'"value='.$querymasinforesultados21[0]['meta_value'].'>

				<input type="hidden" id="code_propiedad_'.$post_original.'"value='.$var_posts[$a]['post_title'].'>
				
	
			<div class="price_propiedad_icons"><div style="align:right;">Precio: '.$querymasinforesultados9[0]['meta_value'].' </div></div><img class="propiedad_img_prin"width=230px height=150px src='.$queryimgresultados[0]['guid'].'>	<div style="display:inline-block;width:62%;margin-bottom:10px;"><div class="pull-left"></img><small>COD:'.$var_posts[$a]['post_title'].'</small></div><div class="pull-right">'.$querymasinforesultados4[0]['meta_value'].'</div></div><br><div class="imgs_propiedad_icons"> <div class="pull-left mas_info_box_txt">+ Mas información</div><div class="pull-right" style="width:50%;">'.$querymasinforesultados[0]['meta_value'].' <img src="assets/img_principal/icon_shower.png" width="22" height="16">  '.$querymasinforesultados2[0]['meta_value'].' <img src="assets/img_principal/icon_bed.png" width="22" height="16">    '.$querymasinforesultados3[0]['meta_value']. '  <img src="assets/img_principal/icon_car.png" width="22" height="16"></div></div></div>';
					
			/*echo $var_posts[$a]['post_title'].'<br>';
			echo $var_posts[$a]['post_content'].'<br><br>';*/

			
				}
		
			
			
		for ($a = 0; $a < count($postsa); $a++)
		{
		echo $postsa[$a];
		}
		}

	
	public function check_pages_from_funct(){
		error_reporting(0);
		
		if ($_SESSION['sess_tipo_propiedad'] == 'Alquiler'){
		$pags = $this->get_pag_alquiler();
		
		return $pags;
		}
		if ($_SESSION['sess_tipo_propiedad'] == 'Venta'){
		$pag = $this->get_pag_venta();
		
		return $pag;
		}
		
		
	}
	
	public function send_msg(){
		$this->load->database();
		$nombre = $_POST['nombre_mail'];
		$email = $_POST['email_mail'];
		$asunto = $_POST['asu_mail'];
		$mensaje = $_POST['mns_mail'];
		$fecha = date("Y-m-d H:i:s");
		$this->db->query("INSERT INTO correos(nombre,email,asunto,mensaje,fecha) values('$nombre','$email','$asunto','$mensaje','$fecha')");
		
	}
	public function check_pages(){
		error_reporting(0);
		
		if ($_SESSION['sess_tipo_propiedad'] == 'Alquiler'){
		$pags = $this->get_pag_alquiler();
		for ($a = 0; $a < count($pags); $a++){
			echo $pags[$a];
		}
		
		}
		if ($_SESSION['sess_tipo_propiedad'] == 'Venta'){
		$pag = $this->get_pag_venta();
		echo $pag;
		
		}
		
		
	}
	public function get_pag_venta(){
		
		error_reporting(0);
	$num_propiedad_por_vista = 9;	
	
	$this->load->database();
	$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%V%' and comment_status = 'open' order by post_date DESC");
	$var_posts = $query->result_array();
	$total_var_post = (count($var_posts)-$vecesrepe);
	
	$vecesrepe = 0;
		for ($r = 0; $r < count($var_posts);$r++){
	
			if ($var_posts[$r]['post_title'] == $var_posts[$r-1]['post_title']){
				
				$vecesrepe++;
			
			}
		
		}
	
		if ($_GET['venta_page'] != ""){
			$limits = array();
		
		//echo "<br>total paginas:" .(intval(count($var_posts) / $num_propiedad_por_vista)+1);
		
	
		$var_paginas_divi = (count($total_var_post) / $num_propiedad_por_vista);
		
		
		
		
		for ($a = 0; $a < $var_paginas_divi; $a++){
		
		//$limits[] = "<a onclick='load_pag_alquiler($a)' href=?alquiler_page=".($a+1).">".($a+1)."</a>";
		$limits[] = "<a style='color:black;margin-left:10%;cursor:pointer;' onclick='load_pag_venta($a+1)'>".($a+1)."</a>";
		
		
		}	
		
	
		$limits['fini'] = ($num_propiedad_por_vista*$_GET['venta_page']);
		$limits['ini'] = (($num_propiedad_por_vista*$_GET['venta_page'])-($num_propiedad_por_vista)+1);
		
		return $limits;
	}
	else{
		$total_var_post = (count($var_posts)-$vecesrepe);
		//echo 'veces repe'.$vecesrepe.'cantidad de array:'.count($var_posts).'restas de ambos:'.$total_var_post;
		
		$var_paginas_divi = ($total_var_post / $num_propiedad_por_vista);
	
		for ($a = 0; $a < intval($var_paginas_divi); $a++){
		
		$pags[] ="<a style='color:black;margin-left:10%;;cursor:pointer;' onclick='load_pag_venta($a+1)'>".($a+1)."</a>";
		//$pags[$a] ="<a href=?alquiler_page=".($a+1).">".($a+1)."</a>";
		}	
		for ($b = 0; $b < count($pags); $b++){
			echo $pags[$b];
		}
		
		
		}
	}
		
	
	public function get_pag_alquiler(){
	error_reporting(0);
	$num_propiedad_por_vista = 9;	
	
	$this->load->database();
	$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%AMI%' and comment_status = 'open' order by post_date DESC");
	$var_posts = $query->result_array();	
		
	
		$vecesrepe = 0;
		for ($r = 0; $r < count($var_posts);$r++){
	
			if ($var_posts[$r]['post_title'] == $var_posts[$r-1]['post_title']){
				
				$vecesrepe++;
				
			}
		
		}
		$total_var_post = (count($var_posts)-$vecesrepe);
		
		
	if ($_GET['alquiler_page'] != ""){
			$limits = array();
		
		//echo "<br>total paginas:" .(intval(count($var_posts) / $num_propiedad_por_vista)+1);
		$var_paginas_divi = ($total_var_post / $num_propiedad_por_vista);
		for ($a = 0; $a < intval($var_paginas_divi); $a++){
		//$limits[] = "<a onclick='load_pag_alquiler($a)' href=?alquiler_page=".($a+1).">".($a+1)."</a>";
		$limits[] = "<a style='color:black;margin-left:3%;cursor:pointer;margin-left:10%;' onclick='load_pag_alquiler($a+1)'>".($a+1)."</a>";
		
		}	
		
	
		$limits['fini'] = ($num_propiedad_por_vista*$_GET['alquiler_page']);
		$limits['ini'] = (($num_propiedad_por_vista*$_GET['alquiler_page'])-($num_propiedad_por_vista)+1);
		
		return $limits;
	}
	else{
		
		$var_paginas_divi = ($total_var_post / $num_propiedad_por_vista);
	
		for ($a = 0; $a < intval($var_paginas_divi); $a++){
		
		$pags[] ="<a style='color:black;margin-left:3%;cursor:pointer;margin-left:10%;' onclick='load_pag_alquiler($a+1)'>".($a+1)."</a>";
		//$pags[$a] ="<a href=?alquiler_page=".($a+1).">".($a+1)."</a>";
		}	
		return $pags;
		
		}
	}
	
	public function get_alquiler_pag_(){
	error_reporting(0);
		$check_pages = $this->check_pages();
		echo $ini = $check_pages['ini'];
		echo $fini = $check_pages['fini'];
	}
	
	public function datos_propiedad(){
	error_reporting(0);
		$this->obtener_imagenes_propiedades($_POST['id_post']);
		$data['post_id'] = $_POST['id_post'];
		$this->load->view('datos_propiedad',$data);
	}
	
	public function obtener_imagenes_propiedades($ab){
	error_reporting(0);
	$this->load->database();
	$query_img = $this->db->query("SELECT * from wp_posts where post_parent = '$ab' and post_type = 'attachment'");
	$array_imgs = $query_img->result_array();
	$cantidad_imgs = count($array_imgs);
	echo '<input type="hidden" id="imagenes_propiedad_'.$ab.'" value=';
	for($a =0; $a < $cantidad_imgs; $a++){
		
	 $imgs_propiedad =  $array_imgs[$a]['guid'];
	 if ($imgs_propiedad != ""){
		 
	echo ','.$imgs_propiedad;
	}
	
	

	}
	echo '>';
	
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */