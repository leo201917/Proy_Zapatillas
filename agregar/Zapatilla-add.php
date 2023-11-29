<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>CASA DE ZAPATILLAS</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END Custom CSS-->

    <!-- BEGIN Estilos Tablas CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/estilosTablas.css">


  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

        <!-- navbar-fixed-top-->
        <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <!-- falta insertar logo del proyecto -->
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
                        </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Ventas</span></a>
            <ul class="menu-content">
              <li class="nav-item"><a href="<?php $puertoweb ?>/proyecto/html/VentaZapatilla.php" data-i18n="nav.dash.main" class="menu-item">Venta de Zapatillas</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Compras</span></a>
            <ul class="menu-content">
            <li><a href="<?php $puertoweb ?>/proyecto/html/CompraZapatilla.php" data-i18n="nav.page_layouts.1_column" class="menu-item">Compras Zapatillas</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Mantenimientos</span></a>
            <ul class="menu-content">
              <li><a href="<?php $puertoweb ?>/proyecto/html/Empleado.php" data-i18n="nav.invoice.invoice_template" class="menu-item">Empleados</a>
              </li>

              <li><a href="<?php $puertoweb ?>/proyecto/html/Stock.php" data-i18n="nav.search_pages.search_page" class="menu-item">Stock</a>
              </li>
              <li><a href="<?php $puertoweb ?>/proyecto/html/Cargo.php" data-i18n="nav.search_pages.search_website" class="menu-item">Cargos</a>
              </li>
              <li><a href="<?php $puertoweb ?>/proyecto/html/Zapatilla.php" data-i18n="nav.login_register_pages.login_simple" class="menu-item">Zapatillas</a>
              </li>
              <li><a href="<?php $puertoweb ?>/proyecto/html/Cliente.php" data-i18n="nav.login_register_pages.register_simple" class="menu-item">Clientes</a>
              </li>
              <li><a href="<?php $puertoweb ?>/proyecto/html/EmpresaFacturar.php" data-i18n="nav.dash.main" class="menu-item">Empresa a Facturar</a>
              </li>
            </ul>
      </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    
    <!-- / main menu-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
        <div style="text-align: right; margin: 20px 0px 10px;">
        </div>
    <form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
      <div id="mail-status">
      <div>
      <div>
        <label style="padding-top: 20px;">Marca</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="marca" id="marca" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;">Modelo</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="modelo" id="modelo" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;">Talla</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="talla" id="talla" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;">Color</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="color" id="color" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;">Precio Origen</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="precioOrigen" id="precioOrigen" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;">Porcentaje Ganancia</label> <span
            id="name-info" class="info"></span><br /> <input type="text" onkeypress="handleKeyPress(event)"
            name="porcentajeGanancia" id="porcentajeGanancia" class="demoInputBox">
      </div>

      <div>
        <label style="padding-top: 20px;"></label> <span
            id="name-info" class="info"></span><br /> <input 
            name="subtotal" id="subtotal" class="demoInputBox" type="hidden">
      </div>

      <div>
        <label style="padding-top: 20px;">Precio Venta</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="precioVenta" id="precioVenta" class="demoInputBox">
      </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Agregar" />
    </div>

</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
    <script>
    function handleKeyPress(e){
 var key=e.keyCode || e.which;
   if (key==13){
    var precioOrigen = $('#precioOrigen').val(); 
     var porcentajeGanancia =  $('#porcentajeGanancia').val();
     var subtotal = (precioOrigen *  porcentajeGanancia)/100;
     var importe = parseFloat(precioOrigen) + parseFloat(subtotal);
     

     subtotal = Math.round((subtotal + Number.EPSILON) * 100) / 100;
     importe = Math.round((importe + Number.EPSILON) * 100) / 100;
     document.getElementById('subtotal').value= subtotal;
     document.getElementById('precioVenta').value= importe;
    alert("PRECIO VENTA: " + importe);

  }
 
}
</script>



    <script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#marca").val()) {
        $("#name-info").html("(required)");
        $("#marca").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#modelo").val()) {
        $("#name-info").html("(required)");
        $("#modelo").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#talla").val()) {
        $("#name-info").html("(required)");
        $("#talla").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#color").val()) {
        $("#name-info").html("(required)");
        $("#color").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#precioOrigen").val()) {
        $("#name-info").html("(required)");
        $("#precioOrigen").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#porcentajeGanancia").val()) {
        $("#name-info").html("(required)");
        $("#porcentajeGanancia").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#subtotal").val()) {
        $("#name-info").html("(required)");
        $("#subtotal").css('background-color','#FFFFDF');
        valid = false;
    }

    if(!$("#precioVenta").val()) {
        $("#name-info").html("(required)");
        $("#precioVenta").css('background-color','#FFFFDF');
        valid = false;
    }
   
    return valid;
}
</script>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- Colocar el pie de pagina -->
    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>
</html>