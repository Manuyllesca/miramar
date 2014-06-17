<div class="modal fade" id="data_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog" style="width:71%;">
				      <div class="modal-content">
				        <div class="modal-header" style="background-color:#253C42;">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title" style="color:white">Propiedad en <i id="state" style="font-style:normal;"></i></h4>
				        </div>
				        <div class="modal-body modal_property_search">
				        <div id="scrolleb"></div>
					        <div id="img_principal">
					        <img id="img_principal_mostrada">
					        	<br>
							<div id="imagen_propiedad">
							
							
							</div>	      
					        </div>
					        <div class="caracteristicas_propiedad"> 
					        	<div class="main_row_caracteristica">
					        	<b>Coste:</b> <i style="font-style:normal;" id="price_property"></i> (<b><i style="font-style:normal;" id="tipo_propiedad"></i></b>)  
					        	, <i style="font-style:normal;" id="mantenimiento_property"></i><br>
					        	<b>Ubicacion:</b> <i style="font-style:normal;" id="ciudad_property"></i>, <i style="font-style:normal;" id="state_property"></i><br>
					        	<b>Referencias:</b> <i style="font-style:normal;" id="ref_property"></i> <br>
					        	<b>Codigo de propiedad:</b> <i style="font-style:normal;" id="codigo_property"></i> <i>(Facilitanos este codigo cuando estes hablando con un operario.)</i>
					        	
					        	</div>
					        	<hr>
					        	<div class="descripcion_row_caracteristica">
					        	<p>
					        	<b>Descripcion:</b><br>
					        	<p id="descr_ajax"></p>


					        	</div>
					        	<hr style="color: #2F332C;	background-color: rgba(0, 0, 0, 0.28);height: 0.8px !important;">
						        <div class="first_row_caracteristica">
							       <p class="pull-left"> <b>Área:</b> <i id="aream2_property"style="font-style:normal"></i><br>
										<b>Piso nº:</b> <i style="font-style:normal;" id="number_floors_property"></i><br>
										<b>Dormitorio(s): </b> <i id="beds_property" style="font-style:normal"></i><br>
							      
							       </p>
							       <p class="pull-center" style="margin: 0 auto; width: 200px;">
							        	<b>Baño(s):</b> <i id="baths_property" style="font-style:normal;"></i>
										<b>Sala/Comedor:</b> <i style="font-style:normal;" id="sala_cm_property"></i>
										<b>Sala de Estar:</b> <i style="font-style:normal;" id="sala_estar_property"></i>
							      
							        	<b>Terraza:</b> <i style="font-style:normal;" id="terraza_property"></i>  
										<b>Balcón:</b> <i style="font-style:normal;" id="balcon_property"></i> 
										<b>Cocina:</b> <i style="font-style:normal;" id="cocina_property"></i>
							       </p>
							       <p class="pull-right" style="top: -60px;width:237px;text-align:right;position: relative;">
							        	<b>Lavandería:</b> <i style="font-style:normal;" id="lavanderia_property"></i>
										<b>Área de Servicio:</b> <i style="font-style:normal;" id="areadeservicio_property"></i>
										<b>Cochera(s):</b> <i id="cars_property" style="font-style:normal;"></i>
							        
							        	<b>Depósito:</b> <i id="deposito_property" style="font-style:normal;"></i>
										
										<b>Ascensor:</b> <i style="font-style:normal" id="ascensor_property"></i>	
						        </div>
					              
					        </div>
					  <hr style="color: #2F332C;height: 0.8px !important;" >
					        <div style="width:170px; margin:0 auto; position:relative;">
					        
					        <button class="btn btn-warning" style="height:60px; width:163px;" onclick="solicitar_cita_tfno()">Solicitar cita</button>
					        </div>
				        </div>
				      	<div class="modal-footer" style="background-color:#152327;">
				        <input id="id_post" type="hidden" value=<?php 
								echo $post_id;
								?> >
				          <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				          <button type="button" class="btn btn-info" onclick="solicitar_cita_tfno()">Solicitar Cita</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div>
			</div>
<script>
//Distrito actual de la propiedad
var id_post =  $("#id_post").val();
var state_total = "#state_" + id_post;
var state = $(state_total).val();
$("#state").html(state);
var img_princi_post = "#img_principal_pro_" + id_post;
var img_princi = $(img_princi_post).val();
$("#img_principal_mostrada").attr('src',img_princi);

var descr_post = "#descripcion_" + id_post;
var descrip_post = $(descr_post).val();
$("#descr_ajax").html(descrip_post);

var price_P = "#precio_" + id_post;
var prices_post = $(price_P).html();
$("#price_property").html(prices_post);


var area = "#aream2_" + id_post;
var aream = $(area).val();
$("#aream2_property").html(aream);

var code = "#code_propiedad_" + id_post;
var codes = $(code).val();
$("#codigo_property").html(codes);

var bath = "#baths_" + id_post;
var baths = $(bath).val();
$("#baths_property").html(baths);

var areaservic = "#areadeservicio_propiedad_" + id_post;
var areaservics = $(areaservic).val();
$("#areadeservicio_property").html(areaservics);

var cocina = "#cocina_propiedad_" + id_post;
var cocinas = $(cocina).val();
$("#cocina_property").html(cocinas);

var lavanderia = "#lavanderia_propiedad_" + id_post;
var lavanderias = $(lavanderia).val();
$("#lavanderia_property").html(lavanderias);

var bed = "#beds_" + id_post;
var beds = $(bed).val();
$("#beds_property").html(beds);

var terraza = "#terraza_propiedad_" + id_post;
var terrazas = $(terraza).val();
$("#terraza_property").html(terrazas);

var deposito = "#deposito_propiedad_" + id_post;
var depositos = $(deposito).val();
$("#deposito_property").html(depositos);


var ascen = "#ascensor_propiedad_" + id_post;
var ascens = $(ascen).val();
$("#ascensor_property").html(ascens);

var car = "#cars_" + id_post;
var cars = $(car).val();
$("#cars_property").html(cars);

var state = "#state_" + id_post;
var states = $(state).val();
$("#state_property").html(states);

var ciudad = "#ciudad_" + id_post;
var ciudads = $(ciudad).val();
$("#ciudad_property").html(ciudads);

var balconn = "#balcon_propiedad_" + id_post;
var balcons = $(balconn).val();
$("#balcon_property").html(balcons);

var ref = "#referencias_" + id_post;
var refs = $(ref).val();
$("#ref_property").html(refs);
var sala_estar = "#salastar_propiedad_" + id_post;
var sala_estars = $(sala_estar).val();
$("#sala_estar_property").html(sala_estars);


var tipo_prop = "#tipo_propiedad_" + id_post;
var tipo_props = $(tipo_prop).val();
$("#tipo_propiedad").html(tipo_props);
var mant = "#mantenimiento_propiedad_" + id_post;
var mants = $(mant).html();
if (mants != ""){
	mantss = '<b>Mantenimiento: </b>'+mants
$("#mantenimiento_property").html(mantss);
}

var nro_piso = "#nropiso_propiedad_" + id_post;
var nro_pisos = $(nro_piso).val();
$("#number_floors_property").html(nro_pisos);

var sala_cm = "#salacomedor_propiedad_" + id_post;
var sala_cms = $(sala_cm).val();
$("#sala_cm_property").html(sala_cms);


var img_propiedad = "#imagenes_propiedad_"+ id_post;
 
var arrayimgs_prop = $(img_propiedad).val().substring(1).split(",");

$.each(arrayimgs_prop,function(i){

	var actual_html = $("#imagen_propiedad").html();
	var final_img_peq = "<div id='peq_img' style='float:left'><img onclick=loader_peque_img('"+arrayimgs_prop[i]+"') height=50 width=70 src="+arrayimgs_prop[i]+"></div>"; 
   $("#imagen_propiedad").html(actual_html+final_img_peq);
});


function loader_peque_img(img_now_fun)
{
	
	$("#img_principal_mostrada").fadeOut("fast").attr('src',img_now_fun).fadeIn("fast");
	
}


bajar();

function bajar(){
	$('.modal-body').animate({
                        scrollTop: "100px"
                        
                    }, 1000);
   interval = setInterval(subir, 1000);
   
          
}

function subir(){
	$('.modal-body').animate({
                        scrollTop: "-100px"},1000);
               clearInterval(interval);
}
function solicitar_cita_tfno()
{
$('#data_modal').modal('hide');
$('html, body').animate({
        scrollTop: $(".pag_contacto").top
    }, 700);
$("#tfno_button").trigger('click');
}
</script>


