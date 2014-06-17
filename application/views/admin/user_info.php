
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>

<?php 
 $editFormAction = 'user_info';
if ((isset($_POST["MM_Update"])) && ($_POST["MM_Update"] == "form1")) {
  $ssql2 = sprintf("UPDATE tbl_usuario SET str_tipocuenta=%s WHERE id_usuario=%s",
                       CleanSQL::Sanear($_POST['type'], "text"),
                       CleanSQL::Sanear($_POST['user'], "int"));

  if($_POST['type']=='f'){
    $tipo = 'FREE';
  }elseif($_POST['type']=='s'){          
    $tipo = 'SENSE';
  }elseif($_POST['type']=='e'){          
    $tipo = 'EXPERIENCE';
  }
  
  $mail = new PHPMailer();
  $mail->setFrom('alerts@bagnop2p.com', 'BagnoP2P (Alertas)');
  $mail->addReplyTo('alerts@bagnop2p.com', 'BagnoP2P (Alertas)');
  $mail->addAddress($row_datos_usuario['str_email'], $row_datos_usuario['str_nombreuser']);
  $mail->Subject = 'Actualizacion de cuenta (BagnoP2P)';
  $mail->msgHTML("<!DOCTYPE html><html><head><meta charset='utf-8'><title>Actualizaci&oacute;n de cuenta (BagnoP2P)</title></head><body style='margin:0; padding:0;'><div style='background-color:#F1F1F1; font-size:0.8em; font-family:  Helvetica, sans-serif; padding:10px;'><div style='width:50%; margin: 0 auto;'><a href='http://www.bagnop2p.com' title='BagnoP2P Web' target='_blank'><img src='http://www.bagnop2p.com/img/logo.png' alt='Baño P2P'></a>
  <div style='background-color:#FFF; color:#666; padding:10px; border:solid 1px #CCCCCC; '>

  <h3 style='color:#000'>Hemos actualizado tu cuenta de usuario</h3>
  <p>A partir de ahora disfrutar&aacute;s de las ventajas de tu nuevo tipo de cuenta</p>
  <p>El paquete elegido es: ".$tipo."</p>
  <div style='margin:20px; padding:5px; background-color:#BDDAE6; color:#FFF;'>
        <p>Puedes ampliar tu informaci&oacute;n de contacto una vez que accedas a tu panel de usuario.</p>
    <p style='text-align:center;'><a href='http://www.bagnop2p.com/access_users.php' style='padding: 2px 12px; line-height: 20px; vertical-align: middle; cursor: pointer; border: 1px solid #cccccc; *border: 0;
   -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; *zoom: 1; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); background-color: #faa732; *background-color: #f89406; color:#FFF; text-decoration:none; background-image: -moz-linear-gradient(top, #fbb450, #f89406); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406)); background-image: -webkit-linear-gradient(top, #fbb450, #f89406); background-image: -o-linear-gradient(top, #fbb450, #f89406); background-image: linear-gradient(to bottom, #fbb450, #f89406); background-repeat: repeat-x; border-color: #f89406 #f89406 #ad6704; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0); filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);' title='Mi espacio personal' target='_blank'>Mi espacio personal</a></p>
  </div>

  </div><div><p style='color:#B3B3B3; font-size:0.9em; padding:15px;'>Este mensaje de correo electr&oacute;nico est&aacute; dirigido a usuarios registrados en BagnoP2P. &copy; 2014, P2P Estudio Creativo S.C.</p></div></div></div></body></html>", dirname(__FILE__));
  $mail->AltBody = "Lo sentimos, es necesaria una plataforma que visualice HTML para acceder al correo.";
  $mail->send();

  $Result1 = $conexionSQL->ejecutar($ssql2);
  $updateGoTo = "../../user_info";
 
}
?>
    <div class="row-fluid text-center">  
               
                <section class="span12 hero-unitlight">
                  <p><b>Nombre: </b><?php echo $row_datos_usuario['str_nombre']; ?></p>
                  <p><b>Apellidos: </b><?php echo $row_datos_usuario['str_apellidos']; ?></p>
                  <p><b>Email: </b><?php echo $row_datos_usuario['str_email']; ?></p>
                  <p><b>País: </b><?php echo $row_datos_usuario['str_pais']; ?></p>
                  <p><b>CP: </b><?php echo $row_datos_usuario['int_cp']; ?></p>
                  <p><b>Localidad: </b><?php echo $row_datos_usuario['str_localidad']; ?></p>
                  <p><b>Dirección: </b><?php echo $row_datos_usuario['str_direccion']; ?></p>
                  <p><b>Teléfono: </b><?php echo $row_datos_usuario['str_telefono']; ?></p>
                  <hr>
                  <h3>Tipo de cuenta:</h3>
                  <form method="post" class="form-inline text-center" action=" <?php echo $editFormAction; ?>">
                    <select name="type">
                      <option value="f" <?php if ($row_datos_usuario['str_tipocuenta']=='f') {echo "selected";} ?> >FREE</option>
                      <option value="s" <?php if ($row_datos_usuario['str_tipocuenta']=='s') {echo "selected";} ?> >SENSE</option>
                      <option value="e" <?php if ($row_datos_usuario['str_tipocuenta']=='e') {echo "selected";} ?> >EXPERIENCE</option>
                    </select>
                    <input type="hidden" name="user" value="<?php echo $row_datos_usuario['id_usuario']; ?>">
                    <input type="hidden" name="MM_Update" value="form1">
                    <input type="submit" class="btn btn-success" value="Ampliar">
                  </form>
                </section>
                
            </div>
