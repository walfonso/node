<?php 


error_reporting(E_ALL);
$_SESSION['tmpkey'] = mt_rand();
require_once ('assets/frontend/dataBase.class.php');

$conectar =  new Conecta();


/**
 *
 */
function ys()
{	
	$conectar =  new Conecta();	
	$consulta = "SELECT * FROM ys2 order by y desc";
	$Rcon = $conectar->consultarBD($consulta);	

	echo "<select class='form-control' name='ys' id='ys'> ";
	echo "<option value='0'>Categoria de Control</option>";
	foreach ($Rcon as $registro)
	{
		echo "<option value='".$registro['valor']."'>".utf8_encode($registro['Y'])." - " .$registro['pelig']."</option>";
	}
	echo "</select>";
}    
 

function provincias($combo)
{	
	$conectar =  new Conecta();	
	$consulta = "SELECT COD_PROV, provincia FROM provincias order by PROVINCIA ASC";
	$Rcon = $conectar->consultarBD($consulta);	
	
	echo "<select class='form-control' name='".$combo."' id='".$combo."' onKeyPress='return handleEnter(this, event)'> ";
	echo "<option value='0'>Seleccione Provincia</option>";
	foreach ($Rcon as $registro)
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}  
  
function localidades($combo)
{	
	$conectar =  new Conecta();	
	$consulta = "SELECT * FROM localidades order by localidad ASC";
	$Rcon = $conectar->consultarBD($consulta);	
	echo "<select class='form-control' name='".$combo."' id='".$combo."' onKeyPress='return handleEnter(this, event)'> ";
	echo "<option value='0'>Seleccione Ciudad</option>";
	foreach ($Rcon as $registro)
	{
		echo "<option value='".$registro[0]."'>".utf8_encode($registro[2])."</option>";
	}
	echo "</select>";
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
<title>Localización Productiva - Secretaría de Producción y Desarrollo Local</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<?php require_once('assets/files_onceCSS.php'); ?>
<?php // require_once('../assets/global/inc/funciones.php'); ?>
<style>.caption-subject {text-transform:uppercase;}
.icon-percent::before {
    content: '%';
    font-weight: bold; color: #000000;
}
</style>
<?php require_once('assets/admin/includes/files_onceJS.php'); ?> 
<script type="text/javascript" src="frm_funcs.js"></script>
<script>
function get_nav (){
var navegador = navigator.userAgent;
  if (navigator.userAgent.indexOf('MSIE') !=-1) {
    document.write('está usando Internet Explorer ...');
  } else if (navigator.userAgent.indexOf('Firefox') !=-1) {
    document.write('está usando Firefox ...');
  } else if (navigator.userAgent.indexOf('Chrome') !=-1) {
    document.write('está usando Google Chrome ...');
  } else if (navigator.userAgent.indexOf('Opera') !=-1) {
    document.write('está usando Opera ...');
  } else {
    document.write('está usando un navegador no identificado ...');
  }
}
  
  //if (navigator.userAgent.indexOf('Firefox') !=-1){
	jQuery(document).ready(function() {    
		$( "#f3" ).datepicker();
		$( "#b1" ).datepicker();
		})
//}
  
</script>
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
<div class="clearfix"></div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">	
		<div class="page-content-wrapper">
			<div class="page-content">
				<center><img src="sec_prod.jpg" class="img-responsive"></center>
                
			<div class="row"> <br /><br />           
	            <div class="col-md-12">

					<form id="direc_form_1" method="post" class="form-horizontal form-bordered" action="forms.class.php">
                                <div name="ok" class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Existen Errores por favor complete todos los campos necesarios.
                                </div>    
								<div class="alert alert6 alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    El C.U.I.T que ingreso ya se encuetra registrado. Gracias!
                                </div>                                    
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    La infomación se ha enviado correctamente. Gracias!.
                                </div>  
                    <!-- BEGIN EXTRAS PORTLET-->
                    <div class="portlet box light bordered">
						<div class="portlet-title">
							<div class="caption" style="margin-left:20px;">
								<span class="caption-subject" style="line-height:25px;"><strong>Datos de la Empresa</strong></span>
							</div>
							<div id="tools_art" class="tools">
								<a href="" class="collapse" style="width: 14px;height: 16px;margin-right: 15px;">
								</a>
							</div>
						</div>                        
                        <div class="portlet-body form">
                            <div class="form-body">
                                                              
                                <div id="pa_form" style="padding:10px;"> 
	                                <div class="form-group last">
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
                                              <label>Razón Social</label>
                                            <input name="rsocial" type="text" class="form-control" id="rsocial"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Nombre Fantasia</label>
                                                <input name="nfantasia" type="text" class="form-control" id="nfantasia" placeholder="">
                                            </div> 
                                        </div>
                                        
	                                    <div class="col-md-3 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Domicilio</label>
                                            <input name="domicilio" type="text" class="form-control" id="domicilio"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                              <label>Cod. Postal</label>
                                                <input name="cpostal" type="text" class="form-control"  placeholder="">
                                            </div> 
                                      </div>
                                         
                                   		<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Provincia</label>
                                                <? provincias ('provincia'); ?>
                                            </div> 
                                      </div>                                        
                                    	<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Ciudad</label>
												<select class="form-control" name="ciudad" id="ciudad" onkeypress="return handleEnter(this, event)"></select>
                                                                                                                                                
                                          </div> 
                                      </div>
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Télefono</label>
                                            <input name="telefono" type="text" class="form-control" id="telefono"  placeholder=""  value="+54">
	                                      </div>                                          
	                                    </div>
										<div class="col-md-6">                                        
	                                        <div class="margin-bottom-20">
                                              <label>Número de CUIT                                               </label>

                                                <input name="cuit" type="text" class="form-control" id="cuit" maxlength="12" onBlur="checkc(this.value);" onKeyPress="return justNumbers(event,this.value);" onBlur="checkc(this.value);" placeholder="">
	                                        </div>                                          
                                   	  </div>  

                                               
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>E-mail</label>
                                            <input name="email" type="text" class="form-control" id="email"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Sitio Web</label>
                                            <input name="sweb" type="text" class="form-control" id="sweb"    placeholder="">
                                            </div> 
                                        </div>



                                                                                    
                            		</div>
                                </div>
                            <!-- END FORM-->
                        </div>


                      
					</div>
                    
                    
                    <!--- paso 1 -->
                    
                    
                    
				</div>
                                    <div class="portlet box light bordered">
						<div class="portlet-title">
							<div class="caption" style="margin-left:20px;">
								<span class="caption-subject" style="line-height:25px;"><strong>DATOS DE LA CONSULTA</strong></span>
							</div>
							<div id="tools_art" class="tools">
								<a href="" class="collapse" style="width: 14px;height: 16px;margin-right: 15px;">
								</a>
							</div>
						</div>                        
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div id="pa_form" style="padding:10px;">
	                                <div class="form-group last">
	                                    <div class="col-md-12" style="padding-left:0px;">
                                    	<div class="col-md-12 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Clasificador</label>
                                            <input name="rubro" type="text" class="form-control codis" id="rubro"  placeholder=""  value="">
                                            </div> 
                                        </div>

                                               
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Superficie</label>
                                            <input name="superficie" type="text" class="form-control" id="superficie"   placeholder="">
	                                      </div>                                          
	                                    </div>
    
	                                   	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Inflamable</label>
                                            <input name="inflamable" type="text" class="form-control" id="inflamable"    placeholder="">
                                            </div> 
                                        </div>                                                                                           
	                                   	
                                        <div class="col-md-10 noborder">
				                            <div class="margin-bottom-20">
												<h4 style="font-weight:600;">Categorización de Generador de Residuos Peligrosos        </h4>
									        </div>
                                        </div>
	                                   	<div class="col-md-2 noborder">
                                    
                                            <div class="margin-bottom-20">
                                            <button name="adds" class=" btn blue btn-sm bold" id="adds" placeholder="">Agregar</button>
                                            </div> 
                                        </div>      
                                        
                                        
	                                    <div class="col-md-3 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Residuos</label>
                                            <input name="residuos" type="text" class="form-control" id="residuos"   placeholder="">
	                                      </div>                                          
	                                    </div>
	                                    <div class="col-md-4 noborder ">
	                                        <div class="margin-bottom-20">
 	                                           <label>Cant. Residuos Gen. CG Kg/mes)</label>
                                            <input name="cresiduos" type="text" class="form-control" id="cresiduos"   placeholder="">
	                                      </div>                                          
	                                    </div>
	                                    <div class="col-md-3 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Según Dec. 1844/03 ("y")</label>
                                                 <?php echo ys(); ?>                    
	                                      </div>                                          
	                                    </div>  
	                                             
	                                    <div class="col-md-2 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>RGxP</label>
                                            <input name="rgxp" type="text" class="form-control" id="rgxp"   placeholder="">
	                                      </div>                                          
	                                    </div>

											<div class="margin-bottom-20">
												<input id="acepta" type="submit" class="btn btn-sm" value="Enviar!">
											</div>
                                                  
                                                       
                                        </div>
									</div>
                                        </div></div>
                                        </div>
  
                    
                                           

                                        
        
</form>
<div class="col-md-12" style="border:none; padding:0px;"><br /> <br />
				<center><img src="sec_prod2.jpg" class="img-responsive"></center>

</div>
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

<script type="text/javascript" src="assets/admin/includes/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
<script src="assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2-bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>

<script type="text/javascript" src="assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
 <script src="assets/global/plugins/select2/select2_locale_es.js"></script><script src="http://malsup.github.com/jquery.form.js"></script> 
<!-- END PAGE LEVEL SCRIPTS -->

<script type="text/javascript">
        // wait for the DOM to be loaded 
$(document).ready(function() { 
	// bind 'myForm' and provide a simple callback function 
	/*$('#direc_form_1').ajaxForm(function() { 
		alert("Hemos recibido los datos correctamente. Gracias!"); 
		location.href="index.php";							
	}); */

	a8s();
	of8();
	pp8();
	$("select[name=ys]").change(function(){
		alert($("select[name=ys]").val());
	});
$('.codis').select2({
	 
         placeholder: "Buscar rubro",
	 
	      allowClear: true,
	 
        ajax: {
	 
              url: 'buscaRub.php',
	 
            dataType: 'json',
	 
            quietMillis: 200,
	 
            data: function (term) {
	 
                return {
	 
                    term: term
	 
                };
	 
             },
	 
              results: function (data) {
	 
              var results = [];
	 
              $.each(data, function(index, item){
	 
                 results.push({
	 
                  id: item.id,
	 
                  text: item.name
	 
                  });
	 
               });
	 
                return {

                    results: results

                };

            }
	 
        }
 
     });	
	
		
}); 

function a8s (){

	var list_target_id = 'a8'; //first select list ID
	var list_select_id = 'a7'; //second select list ID
	var initial_target_html = '<option value="">Seleccione Ciudad...</option>'; //Initial prompt for target select
	
	$('#'+list_target_id).html(initial_target_html); //Give the target select the prompt option
	
	$('#'+list_select_id).change(function(e) {
	//Grab the chosen value on first select list change
	var selectvalue = $(this).val();
	
	//Display 'loading' status in the target select list
	$('#'+list_target_id).html('<option value="">Cargando...</option>');
	
	if (selectvalue == "") {
		//Display initial prompt in target select if blank value selected
	   $('#'+list_target_id).html(initial_target_html);
	} else {
	  //Make AJAX request, using the selected value as the GET
	  $.ajax({url: 'cargaciudad.php?id='+selectvalue,
			 success: function(output) {
				//alert(output);
				$('#'+list_target_id).html(output);
			},
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status + " "+ thrownError);
		  }});
		}
	});
}

function of8 (){

	var list_target_id = 'of3'; //first select list ID
	var list_select_id = 'of2'; //second select list ID
	var initial_target_html = '<option value="">Seleccione Ciudad...</option>'; //Initial prompt for target select
	
	$('#'+list_target_id).html(initial_target_html); //Give the target select the prompt option
	
	$('#'+list_select_id).change(function(e) {
	//Grab the chosen value on first select list change
	var selectvalue = $(this).val();
	
	//Display 'loading' status in the target select list
	$('#'+list_target_id).html('<option value="">Cargando...</option>');
	
	if (selectvalue == "") {
		//Display initial prompt in target select if blank value selected
	   $('#'+list_target_id).html(initial_target_html);
	} else {
	  //Make AJAX request, using the selected value as the GET
	  $.ajax({url: 'cargaciudad.php?id='+selectvalue,
			 success: function(output) {
				//alert(output);
				$('#'+list_target_id).html(output);
			},
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status + " "+ thrownError);
		  }});
		}
	});
}

function pp8 (){

	var list_target_id = 'pp3'; //first select list ID
	var list_select_id = 'pp2'; //second select list ID
	var initial_target_html = '<option value="">Seleccione Ciudad...</option>'; //Initial prompt for target select
	
	$('#'+list_target_id).html(initial_target_html); //Give the target select the prompt option
	
	$('#'+list_select_id).change(function(e) {
	//Grab the chosen value on first select list change
	var selectvalue = $(this).val();
	
	//Display 'loading' status in the target select list
	$('#'+list_target_id).html('<option value="">Cargando...</option>');
	
	if (selectvalue == "") {
		//Display initial prompt in target select if blank value selected
	   $('#'+list_target_id).html(initial_target_html);
	} else {
	  //Make AJAX request, using the selected value as the GET
	  $.ajax({url: 'cargaciudad.php?id='+selectvalue,
			 success: function(output) {
				//alert(output);
				$('#'+list_target_id).html(output);
			},
		  error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status + " "+ thrownError);
		  }});
		}
	});
}


function save_form_1() {
		var checka = document.getElementById('acepta').checked;
	
	
		var form_a = new FormData();
		var form = document.getElementById('direc_form_1');
		
		var success3 = $('.alert-success', form);
		var error3 = $('.alert-danger', form);
		

	
	if (checka == true) { 
	
		var a1 = form.a1.value;
		var a2 = form.a2.value;
		var a3 = form.a3.value;
		var a4 = form.a4.value;
		var a5 = form.a5.value;
		var a6 = form.a6.value;
		
		var a7 = form.a7.options[form.a7.selectedIndex].value;
		var a8 = form.a8.options[form.a8.selectedIndex].value;
		
		var a9 = form.a9.value;
		var a10 = form.a10.value;
		var a11 = form.a11.value;
		var a12 = form.a12.value;
		var a13 = form.a13.value;
	
		
		form_a.append("a1", a1);
		form_a.append("a2", a2);
		form_a.append("a3", a3);
		form_a.append("a4", a4);
		form_a.append("a5", a5);
		form_a.append("a6", a6);
		form_a.append("a7", a7);
		form_a.append("a8", a8);
		form_a.append("a9", a9);
		form_a.append("a10", a10);
		form_a.append("a11", a11);
		form_a.append("a12", a12);
		form_a.append("a13", a13);
	
		
	/***** of an pp part ****/
		var of1 = form.of1.value;	
		var of2 = form.of2.options[form.of2.selectedIndex].value;
		var of3 = form.of3.options[form.of3.selectedIndex].value;
		
		var pp1 = form.pp1.value;	
		var pp2 = form.pp2.options[form.pp2.selectedIndex].value;
		var pp3 = form.pp3.options[form.pp3.selectedIndex].value;	
		
		form_a.append("of1", of1);	
		form_a.append("of2", of2);		
		form_a.append("of3", of3);		
	
		form_a.append("pp1", pp1);	
		form_a.append("pp2", pp2);		
		form_a.append("pp3", pp3);			
		
	
		var b1 = form.b1.value;
		var b2 = form.b2.value;
		var b3 = form.b3.value;
		var b4 = form.b4.value;
		var b5 = form.b5.value;
		var b6 = form.b6.value;
		var b61 = form.b61.value;
		var b62 = form.b62.options[form.b62.selectedIndex].value;
		var b7 = form.b7.value;
		var b8 = form.b8.value;
		var b9 = form.b9.value;
		var b10 = form.b10.value;
		var b101 = form.b101.value;	
		var b11 = form.b11.value;
		var b111 = form.b111.value;
		var b12 = form.b12.options[form.b12.selectedIndex].value;
		var b13 = form.b13.value;
		
		form_a.append("b1", b1);
		form_a.append("b2", b2);
		form_a.append("b3", b3);
		form_a.append("b4", b4);
		form_a.append("b5", b5);
		form_a.append("b6", b6);
		form_a.append("b61", b61);
		form_a.append("b62", b62);
		form_a.append("b7", b7);
		form_a.append("b8", b8);
		form_a.append("b9", b9);
		form_a.append("b10", b10);
		form_a.append("b101", b101);
	
		form_a.append("b11", b11);
		form_a.append("b111", b111);
		
		form_a.append("b12", b12);
		form_a.append("b13", b13);
		
	
		
		var c1 = form.c1.value;
		var c2 = form.c2.value;
		var c3 = form.c3.value;
		var c4 = form.c4.value;
		var c5 = form.c5.value;
		var c6 = form.c6.value;
		var c7 = form.c7.value;
		var c8 = form.c8.value;	
	
		form_a.append("c1", c1);
		form_a.append("c2", c2);
		form_a.append("c3", c3);
		form_a.append("c4", c4);
		form_a.append("c5", c5);
		form_a.append("c6", c6);
		form_a.append("c7", c7);
		form_a.append("c8", c8);
	
		var d1 = form.d1.value;
		var d2 = form.d2.value;
		var d3 = form.d3.value;
		var d4 = form.d4.value;	
		
		form_a.append("d1", d1);
		form_a.append("d2", d2);
		form_a.append("d3", d3);
		form_a.append("d4", d4);
		
		
		var e1 = form.e1.options[form.e1.selectedIndex].value;
		var e2 = form.e2.value;
		var e3 = form.e3.value;
		var e4 = form.e4.value;
		var e5 = form.e5.value;
		var e6 = form.e6.value;
		var e7 = form.e7.value;
		var e8 = form.e8.value;
		var e9 = form.e9.value;
		var e10 = form.e10.value;
		var e11 = form.e11.value;	
		var e12 = form.e12.value;
		var e13 = form.e13.value;
		
		
		form_a.append("e1", e1);
		form_a.append("e2", e2);
		form_a.append("e3", e3);
		form_a.append("e4", e4);
		form_a.append("e5", e5);
		form_a.append("e6", e6);
		form_a.append("e7", e7);
		form_a.append("e8", e8);
		form_a.append("e9", e9);
		form_a.append("e10", e10);
		form_a.append("e11", e11);
		form_a.append("e12", e12);	
		form_a.append("e13", e13);	

		var f1 = form.f1.value;
		var f2 = form.f2.value;
		var f3 = form.f3.value;
		
		form_a.append("f1", f1);
		form_a.append("f2", f2);
		form_a.append("f3", f3);				

			
	} else {alert ('Falta aceptar terminos y condiciones'); return false;} 
 	
	
	
	
	
	var ajax=newajax();
	ajax.open('POST','forms.class.php');
	ajax.send(form_a);
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4)
		{
			var respuesta=ajax.responseText;
		
			if(respuesta == '')
			{
					success3.show();
					form.reset();
					form.a1.focus();				
				setTimeout(function() {
				location.href="index.php";						
				},3000);
			} else {
				if(respuesta == '1')
				{
					error3.fadeIn(1000);
					FLARG.scrollTo(a1, -200);				
					form.a1.focus();
				}
			}
		}	
		
	}	
}

function checkc(id)
{		
	var form = document.getElementById('direc_form_1');
	var cuit = document.getElementById('a1').value;
	var error4 = $('.alert6', form);
		var ajax=newajax();
		ajax.open("POST", "check_cuit.php", true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send("cuit="+cuit);
		ajax.onreadystatechange=function()
		{
			if (ajax.readyState==4)
			{
				var respuesta=ajax.responseText;
				if(respuesta==1)
				{
						error4.fadeIn(1000);
						form.a1.focus();
						form.a1.value ="";				
			
				}
				if(respuesta==0)
				{
						error4.hide();
					
				}										
			}
		}
	}

</script>
				<script type="text/javascript">
					jQuery(document).ready(function() {
						Layout.init();
					});

					var options = {
						target:        '#output',   // target element(s) to be updated with server response
						//beforeSubmit:  validaForm,  // pre-submit callback
						success:       saveForm,  // post-submit callback
					};

					$('#direc_form_1').ajaxForm(options);


					function saveForm () {
						toastr.options = {
							"closeButton": false,
							"debug": false,
							"positionClass": "toast-top-center",
							"preventDuplicates": true,
							"onclick": null,
							"showDuration": "2000",
							"hideDuration": "1000",
							"timeOut": "2000",
							"extendedTimeOut": "2000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						}
						toastr.success("El registro se ha guardado correctamente, sera enviado por email una copia en formato PDF.")
						setTimeout(function() {
							location.href ='index.php'
						},4000);


					}
				</script>
</body>
<!-- END BODY -->
</html>