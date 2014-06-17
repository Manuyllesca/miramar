$(document).ready(function(){
	$("#inmobiliaria_go").click(function(){
    var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_inmobiliaria").offset().top - offset
    }, 700);
});

$("#alquler_page_id").on('click',function(){
	$(".status_propiedad").html('Novedades de Alquileres');
});
$("#venta_page_id").on('click',function(){
	$(".status_propiedad").html('Novedades de Venta');
});
$('#tfno_modal').on('hide',function(e){
  
      e.preventDefault();
 
});



$('#data_modal').on('hide',function(e){
  
      e.preventDefault();
 
});


$(".btn-search-home").click(function(){
	  var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_total").offset().top - offset
    }, 700);
});
$("#propiedades_go").click(function(){
    var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_total").offset().top - offset
    }, 700);
});

$("#asesoria_contact_button_go").click(function(){
    var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_contacto").offset().top - offset
    }, 700);
});

	$("#contact_go").click(function(){
    var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_contacto").offset().top - offset
    }, 700);
});
	$("#index_go").click(function(){
    var offset = 0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_inicio").offset().top - offset
    }, 700);
});
	
		$("#asesoria_go").click(function(){
    var offset = 0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_asesoria_ventas").offset().top - offset
    }, 700);
	
	
});

});