<?php 
   session_start();


?>
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                <form METHOD="POST" class="navbar-form" action="<?php echo 'login' ?>" name="formaccessadmin">
             <center>
             <h1 style="font-family:helvetica;">Miramar</h1><br>
             
             Usuario:    <br>                   
             <input type="text" style="border-radius:4px;" name="user">
            <br>
            <br>
            Contraseña:<br>
            <input type="password" style="border-radius:4px;" name="str_password">
            <br>
            <br>
            <input type="submit" class="btn btn-info" name="entrar"value="entrar">
             </form>   
                                     <br><br>
                    
                    </div>
                </div>
             </div>
         </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
   

</body>

</html>