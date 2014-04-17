<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['funcion_busqueda_nueva'] = $this->busqueda_alquileres_novedades();
		
		$this->load->view('home',$data);
	}
	public function busqueda_novedades()
	{
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
		
		$maximo_num_novedades = 1;
		
		$this->load->database();
		$query = $this->db->query("SELECT * from wp_posts where post_status = 'publish' and post_title like '%AMI%' and comment_status = 'open' order by post_date DESC LIMIT $maximo_num_novedades");
		$var_posts = $query->result_array();
		for ($a = 0;$a <= $maximo_num_novedades; $a++){
		
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
			

			$posts[] = '<div class="pull-left result_busqueda_box">			
			
			
					 			
				<input type="hidden" id="aream2_'.$post_original.'"value="'.$querymasinforesultados5[0]['meta_value'].'>"
				<input type="hidden" id="cuidad_'.$post_original.'"value='.$querymasinforesultados6[0]['meta_value'].'>
				<input type="hidden" id="referencias_'.$post_original.'"value="'.$querymasinforesultados7[0]['meta_value'].'>"
				<input type="hidden" id="tipo_propiedad_'.$post_original.'"value='.$querymasinforesultados8[0]['meta_value'].'>
				<input type="hidden" id="precio_'.$post_original.'"value='.$querymasinforesultados9[0]['meta_value'].'>
				<input type="hidden" id="mantenimiento_propiedad_'.$post_original.'"value='.$querymasinforesultados10[0]['meta_value'].'>
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
				sss

			
			<img class="propiedad_img_prin"width=230px height=150px src='.$queryimgresultados[0]['guid'].'>	<div style="display:inline-block;width:62%;margin-bottom:10px;"><div class="pull-left"></img><small>COD:'.$var_posts[$a]['post_title'].'</small></div><div class="pull-right">'.$querymasinforesultados4[0]['meta_value'].'</div></div><br><div class="imgs_propiedad_icons"> <div class="pull-left mas_info_box_txt">+ Mas información</div><div class="pull-right" style="width:50%;">'.$querymasinforesultados[0]['meta_value'].' <img src="assets/img_principal/icon_shower.png" width="22" height="16">  '.$querymasinforesultados2[0]['meta_value'].' <img src="assets/img_principal/icon_bed.png" width="22" height="16">    '.$querymasinforesultados3[0]['meta_value']. '  <img src="assets/img_principal/icon_car.png" width="22" height="16"></div></div></div>';
			
			
			/*
			echo $var_posts[$a]['post_title'].'<br>';
			echo $var_posts[$a]['post_content'].'<br><br>';*/
		}
		return $posts;
	}
	public function prueba(){
	
	$this->obtener_imagenes_propiedades(22102);
	}
	
	public function obtener_imagenes_propiedades($a){
	$this->load->database();
	$query_img = $this->db->query("SELECT * from wp_posts where post_parent = '$a' and post_type = 'attachment'");
	$array_imgs = $query_img->result_array();
	$cantidad_imgs = count($array_imgs);
	for($a =0; $a <= $cantidad_imgs; $a++){

	 echo $array_imgs[$a]['guid'];

	}

	
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */