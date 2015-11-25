<?php 
session_start();
//require_once('inc/appCFG.php');
//require_once('clases/system.class.php');

if($_POST)
{
	foreach($_POST as $clave => $valor) 
	$$clave=addslashes(trim($valor));
}

if($_GET)
{
	foreach($_GET as $clave => $valor) 
	$$clave=addslashes(trim($valor));
}

  function getArrCount ($arr, $depth=1) { 
      if (!is_array($arr) || !$depth) return 0; 
         
     $res=count($arr); 
         
      foreach ($arr as $in_ar) 
         $res+=getArrCount($in_ar, $depth-1); 
      
      return $res; 
  }

 
//$appDATA = new appCFG;
$_SESSION['id_upload'] = mt_rand();

if ($edit != '') { $id_contenido = $edit;
	$consulta = "SELECT * from contenidos where id = '$edit'";
	$cls = new conectorDB;
	$modif = $cls->consultarBD($consulta,$valores);
	$allow = '<p><b><div><br><h2><h1><h3><h4><iframe><strong><style><div><img>';
	$gantz = strip_tags($modif[0]['ftext'],$allow);
	$gantz = preg_replace('/^\s+|\n|\r|\s+$/m', '',$gantz);
	$arrs = explode("{}", $modif[0]['url_img']);
	
	$_SESSION['img_list'] = $modif[0]['url_img'];
	
	function get_img_art($arr) {
		foreach($arr as $imgs) {
			if ($imgs != ''){
				echo '<div id="'.str_replace ('.','',$imgs).'" class="col-md-3 col-sm-3 gallery-item" style="padding-right:5px;padding-left:5px; "><a data-rel="fancybox-button" 	href="../media/imagenes/'.$imgs.'" class="fancybox-button"><img alt="" src="../media/imagenes/thumb_'.$imgs.'" class="img-responsive"><div class="zoomix"><i class="fa fa-search"></i></div></a><a id="'.$imgs.'" class="borrador" href="javascript: borrar_img(\''.$imgs.'\');" alt="Borrar" title="Borrar" style="position:absolute; top:13px; left:4px;"><i class="fa fa-times fa-lg" style="color:red;"></i></a></div>';
			}
		}
	}
	
}
else {
	$_SESSION['img_list'] = '';
}
?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD --> 
<head>
<meta charset="utf-8"/>
<title>Secretaría de Producción y Desarrollo Local</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<?php require_once('assets/files_onceCSS.php'); ?>
<?php // require_once('../assets/global/inc/funciones.php'); ?>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-boxed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top display-none">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="#">
			<img src="#" alt="logo" class="logo-default"/>
			</a>

		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse wite" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">	
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="row">                        <div class="col-md-1" style="border:none;"></div>
        
                    <div class="col-md-10" style="border:1px solid #000;">
                                    <center><img src="sec_prod.jpg"></center>
                                                                        <center><img src="sec_prod2.jpg"></center>

                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
                    <p>&nbsp; </p>
<center><button id="frm_content" onclick="location.href='index_form.php';" class="btn blue btn-sm bold" style="background-color:#F6821F;">Ingresar al Fromulario</button>                    <p>&nbsp; </p></center>



                                      <div class="col-md-12" style="border:none;">
                                      
                                      
                                      
                                      
                    <p>&nbsp; </p>
                    <center>Secretaría de Producción y Desarrollo Local
                    Av. Belgrano 658 - Tel: 0341 - 480 22 88 Int. 115 - 116</center>
                                        <p>&nbsp; </p>

                    </div>
    
                    </div>                    <div class="col-md-1" style="border:none;"></div>

    
                  
	</div></div></div></div></div>
	</div>

	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">

	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->

<!-- BEGIN CORE PLUGINS -->
<?php require_once('assets/admin/includes/files_onceJS.php'); ?> 

<script type="text/javascript" src="../assets/admin/includes/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
<script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->






<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>