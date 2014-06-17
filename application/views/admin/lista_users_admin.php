
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                       <table class="table table-bordered">
        <thead>
          <tr>
          	<th>Nombre de usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Descripcion</th>
            <th>Email</th>
            <th>Cargo</th>
           
          
          </tr>
        </thead>
        <tbody>
        <?php for($a = 0; $a <= count($lista_admins)-1; $a++){
	        
	        
	        echo '<tr> <td>'.$lista_admins[$a]['user_name'].'</td><td>'.$lista_admins[$a]['nombre'].'</td><td>'.$lista_admins[$a]['apellido'].' </td><td>'.$lista_admins[$a]['descripcion'].' </td><td style="max-height:20px; max-width:300px;">'.$lista_admins[$a]['email'].' </td><td style="max-height:20px; max-width:600px;">'.$lista_admins[$a]['cargo'].' </td></tr>';
	        
}
        ?>
        </tbody>
                    </div>
                </div>
             </div>
         </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
   
<script>
function marcarleido(id){
	var data = {};
	data['id'] = id;
$.ajax({
	url: 'marcar_leido',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
		alert(response);
	}
})
	
}
</script>
</body>

</html>
