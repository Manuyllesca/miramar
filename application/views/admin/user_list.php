

        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                     <table class="table table-hover" >
            
              <thead>
                <tr>
                  <th>ID Usuario</th>
                  <th>Nombre de Usuario</th>
                  <th>Email</th>
                  <th>Tipo de cuenta</th>
                  <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                   
                   
                 <?php do { ?>
                <tr>
                  <td><?php echo $list_user['id_usuario']; ?></td>
                  <td><?php echo $list_user['str_nombreuser']; ?></td>
                  <td><?php echo $list_user['str_email']; ?></td>
                  <td><?php echo $list_user['str_tipocuenta']; ?></td>
                  <td><a href="user_info?user=<?php echo $list_user['id_usuario']; ?>">Ver</a></td>
                </tr>
              <?php } while ($list_user = mysqli_fetch_assoc($Datos_usuarios)); ?> 
                       
                     <br><br>
             
                    </div>
                </div>
             </div>
         </div>
         
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
   

</body>
 <?php $conexionSQL->navegacionpags(); ?>
</html>
