<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miramar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style_admin.css">
    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="../assets/css/plugins/pace/pace.css" rel="stylesheet">
    <script src="../assets/js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="../assets/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="../assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="../assets/css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="../assets/css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="../assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="../assets/css/plugins/morris/morris.css" rel="stylesheet">
    <link href="../assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="../assets/css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="../assets/css/style_original.css" rel="stylesheet">
    <link href="../assets/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="../assets/css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">
       <?php error_reporting(0); if ($_SESSION['MM_Adminname'] != ""){
	       
      ?>
<a class="btn btn-danger pull-right" style="top:8px; position:relative;right:7px;" onclick="cerrar_session()"> Cerrar </a>
 <a class="pull-right" style="margin-top:15px; margin-right:15px; color:white;"><?php echo $_SESSION['MM_Adminname']?></a>
 
 <?php }
?>
            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <a href="home">
                        <h2 style="color:white;top:-25px; font-size:34px;font-family:helvetica;position:Relative"><i style="font-style:normal;color:black;">M</i>iramar</h2>
                        
                    </a>
                    
                </div>
            </div>
            <!-- end BRAND HEADING -->
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                                        <!-- end SIDE NAV USER PANEL -->
                    <!-- begin SIDE NAV SEARCH -->
                    <li class="nav-search">
                        <form role="form">
                            <input type="search" class="form-control" placeholder="Buscar codigo..">
                            <button class="btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- end SIDE NAV SEARCH -->
                    <!-- begin DASHBOARD LINK -->
                    <li>
                        <a class="active" href="home">
                            <i class="fa fa-dashboard"></i> Principal
                        </a>
                    </li>
                    
                      
                     <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#ui-elementss">
                            <i class="fa fa-university"></i> Propiedades <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="ui-elementss">
                            <li>
                                <a href="user_list">
                                    <i class="fa fa-angle-double-right"></i> Agregar propiedad
                                </a>
                            </li>
                            <li>
                                <a href="lista_users_admin">
                                    <i class="fa fa-angle-double-right"></i> Eliminar propiedad
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                    <!-- end DASHBOARD LINK -->
                    <!-- begin CHARTS DROPDOWN -->
                  <!--  <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                            <i class="fa fa-bar-chart-o"></i> Charts <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="charts">
                            <li>
                                <a href="flot.html">
                                    <i class="fa fa-angle-double-right"></i> Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="morris.html">
                                    <i class="fa fa-angle-double-right"></i> Morris.js
                                </a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- end CHARTS DROPDOWN -->
                    <!-- begin FORMS DROPDOWN -->
                   
                    <!-- end FORMS DROPDOWN -->
                    <!-- begin CALENDAR LINK -->
                                    <!-- end CALENDAR LINK -->
                    <!-- begin TABLES DROPDOWN -->
                  <!--  <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#tables">
                            <i class="fa fa-table"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="tables">
                            <li>
                                <a href="basic-tables.html">
                                    <i class="fa fa-angle-double-right"></i> Basic Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced-tables.html">
                                    <i class="fa fa-angle-double-right"></i> Advanced Tables
                                </a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- end TABLES DROPDOWN -->
                    <!-- begin UI ELEMENTS DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#ui-elements">
                            <i class="fa fa-group"></i> Usuarios <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="ui-elements">
                            <li>
                                <a href="edit_users">
                                    <i class="fa fa-angle-double-right"></i> Crear / Eliminar cuentas
                                </a>
                            </li>
                            <li>
                                <a href="lista_users_admin">
                                    <i class="fa fa-angle-double-right"></i> Administradores
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                  

                    <!-- end UI ELEMENTS DROPDOWN -->
                    <!-- begin MESSAGE CENTER DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#ui-elements2">
                            <i class="fa fa-envelope"></i> Correos recibidos <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="ui-elements2">
                            <li>
                                <a href="bandeja_entrada">
                                    <i class="fa fa-angle-double-right"></i> Correos
                                </a>
                            </li>
                            <li>
                                <a href="prof_list">
                                    <i class="fa fa-angle-double-right"></i> Chat
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                        <li>
                        <a href="" style="background-color:#919191; cursor:not-allowed;">
                            <i class="fa fa-calendar"></i> Google analytics
                        </a>
                    </li>

                    <!-- end MESSAGE CENTER DROPDOWN -->
                    <!-- begin PAGES DROPDOWN -->
                                       <!-- end PAGES DROPDOWN -->
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../assets/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="../assets/js/plugins/popupoverlay/defaults.js"></script>
    
    <script>
    function cerrar_session(){
	    $.ajax({
		    url: 'cerrar_sesion',
		    type: 'post',
		    doctype: 'html',
		    success: function(response){
			    window.location.href='login';
		    }
	    });
    }
    
    </script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Cargando.. 
            </h3>
            <p>Aweita..</p>
            
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
      <script src="../assets/js/admin_func_ajax.js"></script>
    <script src="../assets/js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="../assets/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="../assets/js/plugins/messenger/messenger.min.js"></script>
    <script src="../assets/js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="../assets/js/plugins/daterangepicker/moment.js"></script>
    <script src="../assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="../assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="../assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="../assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="../assets/js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="../assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../assets/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="../assets/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="../assets/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="../assets/js/flex.js"></script>
    <script src="../assets/js/demo/dashboard-demo.js"></script>