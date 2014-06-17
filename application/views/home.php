

	<header>
	<meta charset="utf-8" />
		<title> Miramar ventas y alquileres</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style_index.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="assets/js_principal/index.js"></script>
		<script src="assets/js_principal/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		
	</header>
	<body style="overflow:hidden;">
	
	<section class="pag_inicio">
	<div class= style="width:100%">
	<div class="row links-cabe" style="">
		
		<div class="cabecera" >
					<div class="pull-left" style="margin-left:15px;">
					<h2 id="index_go">Inicios</h2>
					</div>	
					<div class="pull-left">
					<h2 id="propiedades_go">Novedades</h2>
					</div>
					<div class="pull-left">
					<h2 id="asesoria_go">Asesoria</h2>
					</div>	
					<div class="pull-left">
					<h2 id="inmobiliaria_go">Quienes somos</h2>
					</div>
					
						<div class="pull-left" style="margin-right:15px;">
					<h2 id="contact_go"style="">Contacto</h2>
					</div>

	</div></div>
	</div>
		<!-- <div class="title_logo">
						<h2 style="color:black; font-size:55px;top:-20px;position:relative;top:-25px;"><u>Miramar</u></h2> 
					</div> -->
					
		<div class="container">
			
								
			
			
			<div class="logo-miramar">
					<h1 class="logo-middle"><i class="letter-m">M</i>iramar </h1>
					<div style="margin:0 auto; width:143px; top:-21px;position:relative;"><small class="min-logo-text">Bienes y Raices</small></div>
				</div>
			
			<div  class="search_box">
			<h1 class="busqueda_search_box">Busqueda <img class="lupa_search"src="assets/img_principal/lupa.png"> </h1>
				<div class="search_title_box">
		
				<div class="radios pull-left">
					<input type=radio name="seleccion_busqueda" onclick="change_status_tipo('Venta')"> Venta   <input type=radio onclick="change_status_tipo('Alquiler')" name="seleccion_busqueda">   Alquiler
				</div>
					<select class="select_bigger">
						<?php for ($c = 0;$c  < count($distrits);$c++){
							echo '<option>';
							echo $distrits[$c];
							echo '</option>';
							
						} ?>
					</select>
					<button class="btn btn-info btn-search-home">Buscar</button>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section class="pag_total">
		<div class="container">
		<div id="modal_id_base"></div>
			<div class="box_propiedades">
				<div class="header_propiedades">
					<div class="tipo_propiedad pull-left">
						<b>Tipo:  </b>  <input type=radio onclick="change_status_tipo('Alquiler')" id="alquler_page_id" name="seleccion_page_busqueda">  Alquiler   <input  id="venta_page_id" onclick="change_status_tipo('Venta')" type="radio" name="seleccion_page_busqueda">   Venta 
					</div>
					<div class="zona_propiedad pull-left">
						<b>Distrito: </b>
						<select id="select_zona_propiedad" class="select_zona_propiedad">
							<?php for ($c = 0;$c  < count($distrits);$c++){
							echo '<option>';
							echo $distrits[$c];
							echo '</option>';
							
						} ?>
						
						</select>
					</div>	
					<div class="novedad_propiedad pull-left" ><b style="float: left;
margin-left: 6px;"><div style="float:left">PAG: </div><p id="pags_available" style="float:left"></p></b> 
						<?php // $cantidadpags = count($check_pages)-2; for($a = 0; $a < $cantidadpags;$a++){echo $check_pages[$a];}?> 
					</div>	
						<div class="status_propiedad pull-left">
						<b>Busqueda actual:</b> Novedades de alquileres
					</div>	
					<div class="btn_buscar_propiedad pull-right">
						<button class="btn btn-danger btn_search"> Buscar</button>
					</div>							
				
				</div>
			
			<div class="contenedor_busqueda_box">
		
			
						
			<?php 
			
		/* $cantidad_alquiler = count($funcion_busqueda_nueva);
		 
		 for ($a = 0;$a <= $cantidad_alquiler;$a++){
		 		echo $funcion_busqueda_nueva[$a];
		 			}
			*/?>
				
			
			</div>
		</div>
	</section>
	<section class="pag_asesoria_ventas" style="word-wrap:-20px;">
		<div class="container">
			<div class="box_total_asesoria">
				Estas buscando vender tu Departamento,Piso, etc... ?<br>
				o quizas Alquilarlo?<br><br>
				
				Alomejor tienes algunas dudas acerca de como podriamos gestionar el proceso de alquiler o venta de tu propiedad<br>
				No dudes en ponerte en contacto con nosotros.<br>
				<br>
				dandole click al siguiente boton! <button class="btn btn-danger" style="width:70px;"id="asesoria_contact_button_go">IR</button>
			</div>
		</div>
	</section>
	
	
	
	<section class="pag_inmobiliaria">
	
	<div class="container">
	<div class="logo-miramar_quienes_somos">
					<h1 class="logo-middle"><i class="letter-m">M</i>iramar </h1>
					<div style="margin:0 auto; width:140px; top:-21px;position:relative;"><small class="min-logo-text">Bienes y Raices</small></div>
				</div>
		<div class="who_we_are_box" style="font-size:15px;">
			<p>
			Somos una agencia Inmobiliaria especializada en el alquiler y venta de departamentos con vista al mar, cerca a Larcomar; los malecones de Miraflores,  Barranco, Chorrillos y Magdalena.
			</p>
			<p>
			Haydée Sangalli Schaerer, propietaria y directora de ventas, con más de 19 años de experiencia en el sector inmobiliario, asume el compromiso de adaptarse a sus necesidades para encontrar la propiedad ideal para usted y su familia. La honestidad y transparencia son los pilares fundamentales de nuestra empresa.
			</p><br>
			<p class="" style="text-shadow: 0px 1px 15px #FFF;text-align:right">
			“El mar simboliza fuerza, persistencia, energía, tranquilidad y placer,
			inclúyelos al significado de tu vida”. <b>Haydée Sangalli Schaerer</b>
			</p>
		</div>
	</div>
	</section>
	
	
	
	
	<section class="pag_contacto">
	<div class="container">
		<div class="contact_box"><br>
			<div class="buttns_contact">
			<h3 style="text-align:center">Miramar contacto!</h3>
				<br>
				<div style="display:inline-block;width:400px;">
				<button class="btn btn-info" style="height:70px;"data-toggle="modal" href="#myModal" > Envienos un Email </button>  - o -  <button class="btn btn-warning" id="tfno_button"style="height:70px;" data-toggle="modal" href="#tfno_modal">Dejenos su telefono!</button>
				
				</div><br><br><br>
				<p style="text-align:center">
				<small>
				En cualquiera de los servicios que solicite, le responderemos en la mayor brevedad posible.
				Un operario se pondra en contacto inmediatamente con usted.
				
				Miramar
				</small>
				</p>
				
				
				
				  <!-- Modal -->
				
			<!--<article class="contact_txtsendusemail_box" >
				<i style="font-size:15px;font-style:normal; font-weight:800;">Envienos un Email!</i> <i class="fa fa-envelope"> </i>
				<br>
			</article>
			<br>
			<article class="contact_name_box" >
			Tu nombre:<br> <input type="text">
				<br>
			</article>
			<div class="correo_asunto_box">
				<article id="contact_correo_box" class="contact_correo_box pull-right" >
					Tu correo:  <br><input type="text">
				</article>
				<article id="contact_asunto_box" class="contact_asunto_box pull-left">
					 Asunto: <br> <input type="text">
					
				</article>
			</div><br>
			<br>
			<article class="contact_msg_box" >
			Mensaje:<br>
				<textarea cols=70 rows=15></textarea>
			</article>
			<article class="contact_sendbutton_box">
				<button class="btn-info btn" style="height: 47px;width: 205px;">Enviar Email</button>
			</article>
			<br>
			<article class="contact_moreinfo_box" >
				<small style="">

				<b>TELEFONO: </b>0051-1-447-8682
				
				<b>CELULAR: </b>0051-99 923-3540
				
				<b>NEXTEL:</b> 51* 407*8524
				
				<b>RPM: </b>*328106
				
				<b>EMAIL: </b>hsangallischaerer@miramar-peru.com
				</small>
			</article>-->
			
		</div>
	</div>
	</section>
	</body>
	<footer>
	
	</footer>
	
	  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header" style="background-color:#3BB4D3;">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title" style="color:white">Envie un email</h4>
				        </div>
				        <div class="modal-body">
				       <article class="contact_name_box" >
							Tu nombre:<br> <input id="name_mail" type="text">
								<br>
							</article>
							<div class="correo_asunto_box">
								<article id="contact_correo_box" class="contact_correo_box pull-right" >
									Tu correo:  <br><input  id="mail_mail" type="text">
								</article>
								<article id="contact_asunto_box" class="contact_asunto_box pull-left">
									 Asunto: <br> <input id="asun_mail"type="text">
									
								</article>
							
							</div><br>
							<br><br>
							<article class="contact_msg_box" >
							Mensaje:<br>
								<textarea cols=70 id="mns_mail" rows=15></textarea>
							</article>

				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				          <button type="button" onclick="env_email()"class="btn btn-info">Enviar</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div>
			</div>
			
			 <div class="modal fade" id="tfno_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header" style="background-color:#DB4046;">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title" style="color:white">Dejenos su telefono!</h4>
				        </div>
				        <div class="modal-body">
				       <article class="tfno_name_box" >
							Tu nombre:<br> <input type="text">
								
							</article>
							
								<article id="tfno_num_box" class="" >
									Tu Numero:  <br><input type="text">
								</article>
								<br>
								<article>
							<p>
							<small>
							Recibira una llamada de un operario en los proximos minutos! que le ayudara con cualquier gestion posible!
							</small>
							</p>
							</article>
				       
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				          <button type="button" class="btn btn-info">Enviar</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div>
			</div>


<script>
$(document).ready(function(){

	$("#select_zona_propiedad").on('change',function(){
		var data = {};
		data['valor_distrito'] = $(this).val();
		$.ajax({
			data: data,
			url: 'home/distrito',
			type: 'POST',
			docType: 'HTML',
			success: function(response){
				$(".contenedor_busqueda_box").html(response);
			}
			
		})
	});

});
	
function modal_up(post){
	var data = {};
	data['id_post'] = post;
	$.ajax({
	 type: 'POST',
		data: data,
		url:  'home/datos_propiedad',
		docType: 'html',
		success: function(response){
			
			$("#modal_id_base").html(response);
			$('#data_modal').modal('show');
		}
		
	});

}

function load_pag_alquiler(num_pag){
	
	$.ajax({
		
		cache: true,
		type:'POST',
		url: 'home/busqueda_alquileres_novedades?alquiler_page='+num_pag,
		docType: 'HTML',
		 beforeSend: function() {
        $('body').css('cursor','wait');
		},
		success: function(response){
			$('body').css('cursor','default');
			$(".contenedor_busqueda_box").html(response);
			
		}     
		
	})
}

function load_pag_venta(num_pag){
	
	$.ajax({
		
		cache: false,
		type:'POST',
		url: 'home/busqueda_ventas_novedades?venta_page='+num_pag,
		docType: 'HTML',
		 beforeSend: function() {
        $('body').css('cursor','wait');
		},
		success: function(response){
			$('body').css('cursor','default');
			$(".contenedor_busqueda_box").html(response);
			
			
		}     
		
	})
}
function env_email(){
var data = {};
data['nombre_mail'] = $("#name_mail").val();
data['email_mail'] = $("#mail_mail").val();
data['asu_mail'] = $("#asun_mail").val();
data['mns_mail'] = $("#mns_mail").val();
$.ajax({
	cache: false,
	data: data,
	type: 'POST',
	url: 'home/send_msg',	
	docType: 'HTML',
	success:function(){
		alert('Enviado correctamente!');
	}
})
}
function get_pag_alquiler(num_pag){

	if (num_pag == ""){
		var num_pag = 1;
	}
	$.ajax({
		
		cache: false,
		type:'POST',
		url: 'home/check_pages',
		docType: 'HTML',
		 beforeSend: function() {
        $('body').css('cursor','wait');
		},
		success: function(response){
			$('body').css('cursor','default');
			$("#pags_available").html(response);
			alert(response);
			
		}     
		
	})

	
}

function get_pag_venta(num_pag){

	if (num_pag == ""){
		var num_pag = 1;
	}
	$.ajax({
		
		cache: false,
		type:'POST',
		url: 'home/check_pages',
		docType: 'HTML',
		 beforeSend: function() {
        $('body').css('cursor','wait');
		},
		success: function(response){
			$('body').css('cursor','default');
			$("#pags_available").html(response);
			alert(response);
			
		}     
		
	})

	
}



function get_pag_kind(num_pag){

	if (num_pag == ""){
		var num_pag = 1;
	}
	$.ajax({
		
		cache: false,
		type:'POST',
		url: 'home/check_pages',
		docType: 'HTML',
		 beforeSend: function() {
        $('body').css('cursor','wait');
		},
		success: function(response){
			$('body').css('cursor','default');
			$("#pags_available").html(response);
			
		}     
		
	})

	
}



function change_status_tipo(tipo){
	
		
	$.ajax({
		cache: false,
		url: 'funcs_home_ajax/change_to_type?tipo='+tipo,
		type: 'POST',
		docType: 'HTML',
		success: function(response){
		get_pag_kind(1);
		
		if (response == 'Alquiler'){
				 load_pag_alquiler(1);
			} 
			if (response == 'Venta'){
				
				load_pag_venta(1);
			}
		}
	})


}
function get_actual_info(){
	 data = {};
	 data['tipo'] = '<? echo $_SESSION['sess_tipo_propiedad'] ?>';
	if (data['tipo'] == 'Alquiler'){
		
		
	}
	if (data['tipo'] == 'Venta'){
		
	}
	
}

</script>
</html>

