$(document).ready(function(){
	$("#inmobiliaria_go").click(function(){
    var offset =0; //Offset of 20px

    $('html, body').animate({
        scrollTop: $(".pag_inmobiliaria").offset().top - offset
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