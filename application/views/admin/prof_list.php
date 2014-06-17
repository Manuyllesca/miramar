
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                                    
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID Empresa</th>
                    <th>CIF</th>
                    <th>Localidad</th>
                    <th>Provincia</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php do { ?>
                  <tr>
                    <td><?php echo $row_Datos_empresa['id_empresa']; ?></td>
                    <td><?php echo $row_Datos_empresa['str_cif']; ?></td>
                    <td><?php echo $row_Datos_empresa['str_localidad']; ?></td>
                    <td><?php echo $row_Datos_empresa['str_provincia']; ?></td>
                    <td><a href="prof_info?prof=<?php echo $row_Datos_empresa['id_empresa']; ?>">Ver</a></td>
                  </tr>
                <?php } while ($row_Datos_empresa = mysqli_fetch_assoc($Datos_empresa)); ?>
                </tbody>
              </table>

                                    
                                     <br><br>
                    
                    </div>
                </div>
             </div>
         </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
   

</body>

</html>