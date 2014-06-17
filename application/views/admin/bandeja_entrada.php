

        <!-- begin MAIN PAGE CONTENT -->
        <style>
        tbody{
	        font-size:13px;
        }
        </style>
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
            <th>ID</th>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Asunto</th>
            <th>Mensaje</th>
            <th>Marcar leido</th>
          
          </tr>
        </thead>
        <tbody>
        <?php for($a = 0; $a <= count($correos)-1; $a++){
	        if ($correos[$a]['leido'] == 0){
		        $leido = '<input type=radio value='.$correos[$a]['id'].' id="marcar_leido" onclick="marcarleido('.$correos[$a]['id'].')" name=readit>';
		        $colorcell = '';
	        }
	        else{
		        $leido = 'Leido<i><small> ('.$correos[$a]['leidopor'].')</small></i>';
		        $colorcell = 'success';
	        }
	        echo '<tr class='.$colorcell.'> <td id=id_correo_'.$correos[$a]['id'].'>'.$correos[$a]['id'].'</td><td>'.$correos[$a]['fecha'].'</td><td>'.$correos[$a]['nombre'].' </td><td>'.$correos[$a]['email'].' </td><td style="max-height:20px; max-width:300px;">'.$correos[$a]['asunto'].' </td><td style="max-height:20px; max-width:600px;">'.$correos[$a]['mensaje'].' </td><td>'.$leido.' </td></tr>';
	        
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
		reload();
	}
})
	
}
</script>
</body>

</html>
