
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content ">

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
           <th class="red">Eliminar</th>
          
          </tr>
        </thead>
        <tbody>
        <?php for($a = 0; $a <= count($edit_users)-1; $a++){
	      	
	      
	        echo '<tr> <td><input type="text" id='.$edit_users[$a]['ID'].' onfocusout="changeusrname('.$edit_users[$a]['ID'].')" style="width:100px;" value="'.$edit_users[$a]['user_name'].'"></td><td>'.$edit_users[$a]['nombre'].'</td><td>'.$edit_users[$a]['apellido'].'</td><td><input onfocusout="changedesc('.$edit_users[$a]['ID'].')" id=desc'.$edit_users[$a]['ID'].'  type="text" value="'.$edit_users[$a]['descripcion'].'" ></td><td style="max-height:20px; max-width:300px;"><input type="text" id=email'.$edit_users[$a]['ID'].' onfocusout="changeemail('.$edit_users[$a]['ID'].')" value="'.$edit_users[$a]['email'].'"></td><td style="max-height:20px; max-width:600px;"><input type="text" id=cargo'.$edit_users[$a]['ID'].' onfocusout="changecargo('.$edit_users[$a]['ID'].')" style="width:150px;" value="'.$edit_users[$a]['cargo'].'">  </td><td> <i class="fa fa-trash-o"></i> <input type=radio onclick="eliminarusr('.$edit_users[$a]['ID'].')" </td></tr>';
	        
}
        ?>
        </tbody>
                    </div>
                    </table>
                    <hr>
                    <a data-toggle="modal" href="#myModal" class="pull-right" href=""><i class="fa fa-plus" style="color:green;"></i> Crear nuevo usuario</a>
                </div>
             </div>   
             
             


  <!-- Modal -->
  <style>
  input[type="text"]{
border:	1px solid rgba(0, 0, 0, 0.2);
	  border-radius:4px;
	 height:30px;
  }
   input[type="password"]{
border:	1px solid rgba(0, 0, 0, 0.2);
	  border-radius:4px;
	  height:30px;
	 
  }
  </style>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header red">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" style="color:white">Crear usuario</h4>
        </div>
        <div class="modal-body">
        <center>
          Nombre de usuario:
         <br>
         <input type="text" name="user_name" id="nombreuser_modal">
         <br><br>
         Contraseña:<br>
         <input type="password" id='pass_modal'>
         <br></center><hr>
         Nombre: 
         <br>
         <input type="text" name="name" id="nombre_modal">
         <br><br>
		 Apellidos: 
		 <br>
         <input type="text" name="apellidos" id="apellido_modal">
         <br><br>
         Email<br>
         <input type="text" name="emai" id="email_modal">
         <br><br>
         Descripcion
         <br>
       
         <input type="text" name="desc" id="desc_modal">
         <br><br>
         Cargo:
         <br>
         <input type="text" name="cargo" id="cargo_modal">
        
	         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button onclick="crearusuario()" type="button" class="btn btn-success">Crear!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
             
         </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
 
<script>
function changeusrname(id){

	
	var data = {};
	data['id'] = id;
	data['usrnew'] = ($("#"+id).val());
	$.ajax({
	url: 'change_usrn',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
		
	}
});

}

function changecargo(id){

	
	var data = {};
	data['id'] = id;
	data['cargo'] = ($("#cargo"+id).val());
	$.ajax({
	url: 'change_cargo',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){

	}
});

}

function changedesc(id){

	
	var data = {};
	data['id'] = id;
	data['desc'] = ($("#desc"+id).val());
	$.ajax({
	url: 'change_desc',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
		
	}
});

}

function changeemail(id){

	
	var data = {};
	data['id'] = id;
	data['email'] = ($("#email"+id).val());
	$.ajax({
	url: 'change_email',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
	
	}
});

}

function crearusuario(){

	var data = {};
	data['username'] = $("#nombreuser_modal").val();
	data['password'] = $("#pass_modal").val();
	data['email'] = $("#email_modal").val();
	data['nombre'] = $("#nombre_modal").val();
	data['apellidos'] = $("#apellido_modal").val();
	data['desc'] = $("#desc_modal").val();
	data['cargo'] = $("#cargo_modal").val()
	
	$.ajax({
	url: 'crear_user',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
		window.location.href="lista_users_admin";
	}
});

}


function eliminarusr(id){

	var data = {};
	data['id'] = id;
	$.ajax({
	url: 'eliminar_usr',
	data: data,
	type: 'POST',
	doctype: 'html',
	success: function(response){
		window.location.href="edit_users";
	}
});
	
}
</script>
</body>

</html>