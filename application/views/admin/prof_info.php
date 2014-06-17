  <?php $editFormAction = $_SERVER['PHP_SELF'];
		if (isset($_SERVER['QUERY_STRING'])) {
		  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
		}
		if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formempr")) {
			
		  $ssql1 = sprintf("UPDATE tbl_empresa SET text_descripcion=%s WHERE id_empresa=%s",
							   CleanSQL::Sanear($_POST['text_descripcion'], "text"),
		                       CleanSQL::Sanear($_POST['id'], "int"));
		
		  $Result1 = $conexionSQL->ejecutar($ssql1);
		  $updateGoTo = $_SERVER['PHP_SELF'];
		  if (isset($_SERVER['QUERY_STRING'])) {
		    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
		    $updateGoTo .= $_SERVER['QUERY_STRING'];
		  }
		  header(sprintf("Location: %s", $updateGoTo));
		};
?>

  
     <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br><div class="row-fluid text-center">  
               
                <section class="span12 hero-unitlight3">
                <?php if ($row_datos_empresa['str_logoempresa'] != NULL) { ?>
                      <img src="../assets/img_prof/<?php echo $row_datos_empresa['id_empresa']; ?>/<?php echo $row_datos_empresa['str_logoempresa']; ?>" alt="Imagen corporativa">
                  <?php } ?>
                  <p><b>Nombre: </b><?php echo $row_datos_empresa['str_nombre']; ?></p>
                  <p><b>Email: </b><?php echo $row_datos_empresa['str_email']; ?></p>
                  <p><b>C.I.F.: </b><?php echo $row_datos_empresa['str_cif']; ?></p>
                  <p><b>Tlfn.: </b><?php echo $row_datos_empresa['int_tlfncontacto']; ?></p>
                  <p><b>Localidad: </b><?php echo $row_datos_empresa['str_localidad']; ?></p>
                  <p><b>Provincia: </b><?php echo $row_datos_empresa['str_provincia']; ?></p>
                  <p><b>Descripción: </b><br><hr>
				  <form name="form1"method="post" action="<?php echo $editFormAction; ?>">
                            <label>Breve descripción</label><br>
                            <span id="sprytextarea1">
                            <textarea required name="text_descripcion" class="text-center" cols="40" rows="3"><?php echo htmlentities($row_datos_empresa['text_descripcion'], ENT_COMPAT, 'utf-8'); ?></textarea><span id="countsprytextarea1">&nbsp;</span></span><br><br><br>
                            <input type="submit" class="btn btn-blue" value="Actualizar">
                            <input type="hidden" name="MM_update" value="formempr">
                            <input type="hidden" name="id" value="<?php echo $row_datos_empresa['id_empresa']; ?>">
                  </form>
                  </p>
                  <p><b>Sector: </b><?php echo $row_datos_empresa['str_sector']; ?></p>
                  <div>
                  <?php if ($row_datos_empresa['str_imgportfolio1'] != NULL) { ?>
                      <img src="../assets/img_prof/<?php echo $row_datos_empresa['id_empresa']; ?>/<?php echo $row_datos_empresa['str_imgportfolio1']; ?>" alt="Imagen corporativa">
                  <?php } ?>
                  </div>
                  <div>
                  <?php if ($row_datos_empresa['str_imgportfolio2'] != NULL) { ?>
                      <img src="../assets/img_prof/<?php echo $row_datos_empresa['id_empresa']; ?>/<?php echo $row_datos_empresa['str_imgportfolio2']; ?>" alt="Imagen corporativa">
                  <?php } ?>
                  </div>
                </section>
                
            </div>
