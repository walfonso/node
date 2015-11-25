<?php 
function conectar()
{
	$server = "localhost";
	$db     = "standout_dir";
	$user   = "standout_dir";
	$pass   = "eleven2912"; 

//	mysql_connect("localhost", "freelimi_secform", "secform123") or die (mysql_error());
//	mysql_select_db("freelimi_secform") or die (mysql_error());	
	mysql_connect("$server","$user", "$pass") or die(mysql_error());	
	mysql_select_db("$db") or die(mysql_error());
}

//conectar();  

function provincias($combo)
{	
	conectar();
	$consulta=mysql_query("SELECT COD_PROV, provincia FROM provincias order by PROVINCIA ASC");
	echo "<select class='form-control' name='".$combo."' id='".$combo."' onKeyPress='return handleEnter(this, event)'> ";
	echo "<option value='0'>Seleccione Provincia</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}  
  
function localidades($combo)
{	
	conectar();
	$consulta=mysql_query("SELECT * FROM localidades order by localidad ASC");
	echo "<select class='form-control' name='".$combo."' id='".$combo."' onKeyPress='return handleEnter(this, event)'> ";
	echo "<option value='0'>Seleccione Ciudad</option>";
	while($registro=mysql_fetch_row($consulta))
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
<title>Secretaría de Producción y Desarrollo Local - Directorio Exportador</title>

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
    font-weight: bold; color:#000;
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

					<form id="direc_form_1" method="post" class="form-horizontal form-bordered" action="frm_procces.php">
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
								<span class="caption-subject" style="line-height:25px;"><strong>A. Datos de la Empresa</strong></span>
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
                                    
	                                   	 <div class="col-md-6">                                        
	                                        <div class="margin-bottom-20">
                                              <label>Número de CUIT                                               </label>

                                                <input name="a1" type="text" class="form-control" id="a1" maxlength="12" onBlur="checkc(this.value);" onKeyPress="return justNumbers(event,this.value);" onBlur="checkc(this.value);" placeholder="">
	                                        </div>                                          
                                   	  </div>
                                        
                                        
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Nº de registro de exportador </label>
                                            <input name="a2" type="text" class="form-control" id="a2"  placeholder="">
                                                
                                            </div> 
                                        </div>
                                    

	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
                                              <label>Razón Social</label>
                                            <input name="a3" type="text" class="form-control" id="a3"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Nombre Fantasia</label>
                                                <input name="a4" type="text" class="form-control" id="a4" placeholder="">
                                            </div> 
                                        </div>
                                        
	                                    <div class="col-md-3 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Dirección</label>
                                            <input name="a5" type="text" class="form-control" id="a5"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                              <label>Cod. Postal</label>
                                                <input name="a6" type="text" class="form-control"  placeholder="">
                                            </div> 
                                      </div>
                                         
                                   		<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Provincia</label>
                                                <? provincias ('a7'); ?>
                                            </div> 
                                      </div>                                        
                                    	<div class="col-md-3 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Ciudad</label>
												<select class="form-control" name="a8" id="a8" onkeypress="return handleEnter(this, event)"></select>
                                                                                                                                                
                                          </div> 
                                      </div>
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Télefono</label>
                                            <input name="a9" type="text" class="form-control" id="a9"  placeholder=""  value="+54">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Fax</label>
                                            <input name="a10" type="text" class="form-control" id="a10"  placeholder=""  value="+54">
                                            </div> 
                                        </div>

                                               
	                                    <div class="col-md-6 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>E-mail</label>
                                            <input name="a11" type="text" class="form-control" id="a11"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Sitio Web</label>
                                            <input name="a12" type="text" class="form-control" id="a12"    placeholder="">
                                            </div> 
                                        </div>                                         
                                         
                                         
                                   		<div class="col-md-12 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label> <strong style="font-size:17px;">Oficinas Comerciales</strong></label>
                                            </div> 
                                      </div>   
	                                    <div class="col-md-4 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Dirección</label>
                                            <input name="of1" type="text" class="form-control" id="of1"   placeholder="">
	                                      </div>                                          
	                                    </div>
          
                                         
                                   		<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Provincia</label>
                                                 <? provincias ('of2'); ?>

                                            </div> 
                                      </div>                                        
                                    	<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Ciudad</label>
                                                <? localidades ('of3'); ?>
                                                
											</div> 
                                      </div>  

                                                                                 

                                   		<div class="col-md-12 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label> <strong style="font-size:17px;">Planta de Producción</strong></label>
                                            </div> 
                                      </div>   
	                                    <div class="col-md-4 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Dirección</label>
                                            <input name="pp1" type="text" class="form-control" id="pp1"   placeholder="">
	                                      </div>                                          
	                                    </div>
          
                                         
                                   		<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Provincia</label>
                                                <? provincias ('pp2'); ?>

                                            </div> 
                                      </div>                                        
                                    	<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                                <label>Ciudad</label>
                                                <? localidades ('pp3'); ?>
                                                
                                          </div> 
                                      </div>      


	      
                                    	<div class="col-md-12 noborder">                                    
                                                <label><strong style="font-size:17px;">Comercio Exterior</strong> </label>
                                       </div>
                                            
	                                    <div class="col-md-12 noborder">
	                                        <div class="margin-bottom-20">
 	                                           <label>Nombre del responsable</label>
                                            <input name="a13" type="text" class="form-control" id="a13"   placeholder="" width="300">
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
								<span class="caption-subject" style="line-height:25px;"><strong>B. ACTIVIDAD ECONÓMICA DE LA EMPRESA</strong></span>
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
	                                   	 <div class="col-md-5 ">                                        
                                           <div class="margin-bottom-20">
                                             <label>Año de Fundación / Inicio de Actividades: </label>
                                            <input name="b1" type="text" class="form-control" id="b1"  placeholder="">
	                                       </div>                                          
                                    	  </div>
                                        </div>
	                                    <div class="col-md-6 noborder ">
                                          <div class="margin-bottom-20">
 	                                           <label>Sector <h5>(Ejemplo: Sector Metalúrgico)</h5></label>
                                            <input name="b2" type="text" class="form-control" id="b2"   placeholder="">
	                                      </div>                                          
	                                    </div>
                                    	<div class="col-md-6 noborder">
                                    
                                          <div class="margin-bottom-20">
 	                                           <label>Rama Actividad <h5>(Ejemplo: Rama actividad: Autopartes)</h5></label>
                                              <input name="b3" type="text" class="form-control"  placeholder="">
                                            </div> 
                                        </div>
                                    	<div class="col-md-12 noborder">
                                    
                                          <div class="margin-bottom-20">
                                            <label>Actividad Principal</label>
                                              <input name="b4" type="text" class="form-control"  placeholder="">
                                            </div> 
                                        </div>
                                    	<div class="col-md-12 noborder">
                                    
                                          <div class="margin-bottom-20">
                                            <label>Actividad Secundaria</label>
                                              <input name="b5" type="text" class="form-control"  placeholder="">
                                            </div> 
                                        </div>  
                                    	<div class="col-md-5 noborder">
                                    
                                          <div class="margin-bottom-20">
                                            <label>Cantidad de Establecimientos que posee</label>
                                              <input name="b6" type="text" class="form-control"  placeholder="">
                                            </div> 
                                        </div>  
                             		<div class="col-md-3 noborder">
                                    
                                      <div class="margin-bottom-20">
                                        <label>Personal ocupado:</label>
                                          <input name="b61" type="text" class="form-control" id="b61"  placeholder="">
                                        </div> 
                                      </div>
                             		<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                              <label>¿Exporta directamente?</label>
 <select name="b62" id="b62" class="form-control sel_seccion">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Esporádicamente</option>
                                                <option value="1">Sistemáticamente  </option>
                                                
                                              </select>
											</div> 
                                      </div> 
                             		<div class="col-md-12 noborder">
                            
                                           <label>Exportaciones durante los últimos 3 años?</label>
                                        <div class="margin-bottom-20">
                                        </div>                                      
                            		</div>
                                                                            
                             		<div class="col-md-2 noborder">
                            
                                        <div class="margin-bottom-20">
                                           <label>2012</label>
                                        </div>                                      
                            		</div>
                             		<div class="col-md-10 noborder">
                            
                                        <div class="margin-bottom-20">

										<div class="input-icon">
															<i class="fa icon-percent"></i>
															<input name="b7" type="text" class="form-control" id="b7" placeholder="" style="width:150px;">
										  </div>
                                        </div>                                      
                            		</div>  
                             		<div class="col-md-2 noborder">
                            
                                        <div class="margin-bottom-20">
                                           <label>2013</label>
                                        </div>                                      
                            		</div>
                             		<div class="col-md-10 noborder">
                            
                                        <div class="margin-bottom-20">
										<div class="input-icon">
															<i class="fa icon-percent"></i>
															<input name="b8" type="text" class="form-control" id="b8" placeholder="" style="width:150px;">
										  </div>                                        
										</div>                                      
                            		</div>                                     
                             		<div class="col-md-2 noborder">
                            
                                        <div class="margin-bottom-20">
                                           <label>2014</label>
                                        </div>                                      
                            		</div>
                             		<div class="col-md-10 noborder">
                            
                                        <div class="margin-bottom-20">
										<div class="input-icon">
															<i class="fa icon-percent"></i>
															<input name="b9" type="text" class="form-control" id="b9" placeholder="" style="width:150px;">
										  </div>                                        
										</div>                                      
                            		</div>   
                                    
                                    
									
                             		<div class="col-md-12 noborder">
                            
                                           <label>Mercados destino de las exportaciones</label>
                            		</div>
                                                                               
                                    
                                    <div class="col-md-8 noborder ">
                            
                                        <div class="margin-bottom-20">
                                           <input name="b10" type="text" class="form-control" id="b10"  placeholder="">
                                        </div>                                      
                            		</div>
                             		<div class="col-md-3 noborder">
                            
                                        <div class="margin-bottom-20">
                                           <input name="b101" type="text" class="form-control" id="b101"  placeholder="">
                                        </div>                                      
                            		</div>  
                                    
                                    <div class="col-md-8 noborder ">
                            
                                        <div class="margin-bottom-20">
                                           <input name="b11" type="text" class="form-control" id="b11"  placeholder="">
                                        </div>                                      
                            		</div>
                             		<div class="col-md-3 noborder ">
                            
                                        <div class="margin-bottom-20">
                                           <input name="b111" type="text" class="form-control" id="b111"  placeholder="">
                                        </div>                                      
                            		</div>   
                                    
                                                                                                           
                             		<div class="col-md-4 noborder">
                                    
                                            <div class="margin-bottom-20">
                                              <label>¿Importa?</label>
 												<select name="b12" id="b12" class="form-control sel_seccion">
                                                <option value="0">Seleccione</option>
                                                <option value="1">Si</option>
                                                <option value="1">No  </option>
                                                
                                                </select>
											</div> 
                                      </div> 
                             		<div class="col-md-8 noborder">
                            
                                           <label>Principales Mercados desde donde importa</label>
                                        <div class="margin-bottom-20">
											 <input name="b13" type="text" class="form-control" id="b13"  placeholder="">

                                        </div>                                      
                            		</div>                                  
                                               
                                                       
                                </div>
                            <!-- END FORM-->
                        </div>
                        
                        
					</div></div>
                    </div>
                    
                    
                    
					<div class="portlet box light bordered">
						<div class="portlet-title">
							<div class="caption" style="margin-left:20px;">
								<span class="caption-subject" style="line-height:25px;"><strong>C. OFERTA (PRODUCTOS OFRECIDOS) Principales productos</strong></span>
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
                                    	<div class="col-md-5">
	                                        <div class="margin-bottom-20">
 	                                           <label>NCM - Posición Arancelaria principales productos</label>
	                                      </div>                                        
                                        </div>
                                 <div class="col-md-7 noborder ">
	                                        <div class="margin-bottom-20">
 	                                           <label>Descripción del Producto</label>
                                   </div>                                          
                                      </div>                                          
                                        
	                                    <div class="col-md-3">
	                                        <div class="margin-bottom-20">
                                            <input name="c1" type="text" class="form-control" id="c1"  placeholder="" onKeyPress="return justNumbers(event,this.value);" maxlength="8">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-2">
	                                        <div class="margin-bottom-20">
 	                                           <label>(8 digitos)</label>
	                                      </div>                                        
                                        </div>
                                        
                                      
	                                    <div class="col-md-7 noborder ">
	                                        <div class="margin-bottom-20">
                                           <input name="c2" type="text" class="form-control" id="c2"  placeholder=""> 
	                                      </div>                                          
	                                    </div>
	                                    <div class="col-md-3">
	                                        <div class="margin-bottom-20">
                                            <input name="c3" type="text" class="form-control" id="c3"  placeholder=""  onKeyPress="return justNumbers(event,this.value);" maxlength="8">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-2">
	                                        <div class="margin-bottom-20">
 	                                           <label>(8 digitos)</label>
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-7 noborder ">
	                                        <div class="margin-bottom-20">
                                            <input name="c4" type="text" class="form-control" id="c4" placeholder="">
	                                      </div>                                          
	                                    </div>                                        

	                                    <div class="col-md-3">
	                                        <div class="margin-bottom-20">
                                            <input name="c5" type="text" class="form-control" id="c5"  placeholder="" onKeyPress="return justNumbers(event,this.value);" maxlength="8">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-2">
	                                        <div class="margin-bottom-20">
 	                                           <label>(8 digitos)</label>
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-7 noborder ">
	                                        <div class="margin-bottom-20">
                                            <input name="c6" type="text" class="form-control" id="c6" placeholder="">
	                                      </div>                                          
	                                    </div>
	                                    <div class="col-md-3">
	                                        <div class="margin-bottom-20">
                                            <input name="c7" type="text" class="form-control" id="c7"  placeholder="" onKeyPress="return justNumbers(event,this.value);" maxlength="8">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-2">
	                                        <div class="margin-bottom-20">
 	                                           <label>(8 digitos)</label>
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-7 noborder ">
	                                        <div class="margin-bottom-20">
                                            <input name="c8" type="text" class="form-control" id="c8"  placeholder="">
	                                      </div>                                          
	                                    </div>                                        

                                      

                                </div>
                        	</div>

					</div>
        
        </div>
       				  </div>	
                        <div class="portlet box light bordered">
						<div class="portlet-title">
							<div class="caption" style="margin-left:20px;">
								<span class="caption-subject" style="line-height:25px;"><strong>D. Certificaciones – Normas de calidad (indicar cuales)</strong></span>
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
	                                    <div class="col-md-12">
	                                        <div class="margin-bottom-20">
                                            <input name="d1" type="text" class="form-control" id="d1"   placeholder="">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-12 noborder ">
	                                        <div class="margin-bottom-20">
                                            <input name="d2" type="text" class="form-control" id="d2"   placeholder="">
	                                      </div>                                          
	                                    </div>                                        

 	                                    <div class="col-md-12">
	                                        <div class="margin-bottom-20">
                                            <input name="d3" type="text" class="form-control" id="d3"   placeholder="">
	                                      </div>                                        
                                        </div>
	                                    <div class="col-md-12 noborder ">
	                                        <div class="margin-bottom-20">
                                            <input name="d4" type="text" class="form-control" id="d4"   placeholder="">
	                                      </div>                                          
	                                    </div>
	                                </div>
    	                    	</div>
							</div>
                          </div>
                        </div>
					  <div class="portlet box light bordered">
                        
						<div class="portlet-title">
							<div class="caption" style="margin-left:20px;">
								<span class="caption-subject" style="line-height:25px;"><strong>E. Información Complementaria</strong></span>
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
	                                    <div class="col-md-12">
                                        	<div class="col-md-5">

                                                <label>Su empresa integra un grupo exportador?</label></div> 	                                    
                                                <div class="col-md-7">
                                             <select class="form-control" id="e1" style="width:200px;">
                                            <option value="1">Si</option>
                                            <option value="2">No</option>
                                            </select></div> <br /><br /><br />
                                         	<div class="col-md-3">
                                         
                                                <label>Indique nombre de grupo</label>
                                                <div class="margin-bottom-20">                                            
                                                <input name="e2" type="text" class="form-control" id="e2"   placeholder="">
                                              </div>  
											</div> 
                                            
                                         	<div class="col-md-3">
                                         
                                                <label>Coordinador:</label>
                                                <div class="margin-bottom-20">                                            
                                                <input name="e3" type="text" class="form-control" id="e3"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <label>Teléfono</label>
                                                <div class="margin-bottom-20">                                            
                                                <input name="e4" type="text" class="form-control" id="e4"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <label>E-mail</label>
                                                <div class="margin-bottom-20">                                            
                                                <input name="e5" type="text" class="form-control" id="e5"   placeholder="">
                                              </div>  
											</div>                                             
                                            
                                            
                                         	<div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e6" type="text" class="form-control" id="e6"   placeholder="">
                                              </div>  
											</div> 
                                            
                                         	<div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e7" type="text" class="form-control" id="e7"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e9" type="text" class="form-control" id="e9"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e10" type="text" class="form-control" id="e10"   placeholder="">
                                              </div>  
											</div>                                              
                                            
                                            
                                         	<div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e8" type="text" class="form-control" id="e8"   placeholder="">
                                              </div>  
											</div> 
                                            
                                         	<div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e12" type="text" class="form-control" id="e12"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e13" type="text" class="form-control" id="e13"   placeholder="">
                                              </div>  
											</div>                                          	
                                            <div class="col-md-3">
                                         
                                                <div class="margin-bottom-20">                                            
                                                <input name="e11" type="text" class="form-control" id="e11"   placeholder="">
                                              </div>  
											</div>                                              
                                            
                                                                                        
                                                                                                                              
	                                    </div> 
                                  </div>                                                                               
                              </div>
                    	  </div>
						</div>
                          </div>
					  <div class="col-md-6" style="border:#e5e5e5 1px solid;"><br />

                        <div class="margin-bottom-20">   
                       	  <label>Datos de la persona que completó la ficha</label>
                                         
                          <input name="f1" type="text" class="form-control" id="f1"   placeholder="" style="width:250px !important;">
                          </div>   
                                                           	<label>Cargo</label>

								<div class="margin-bottom-20">                                            
                                            <input name="f2" type="text" class="form-control" id="f2"   placeholder="" style="width:250px !important;">
 		                                     </div>  

                                             
                                             
                                                   <div class="col-md-12" style="margin-left:0px !important; padding-left:0px !important;">

                                          <label>Fecha:</label>                                                            
  <input type="text" class="form-control" id="f3"  placeholder="" style="margin-bottom:20px !important;"></div>
                                                            
                                                                                
                      </div>
         <div class="col-md-6" style="border:#e5e5e5 1px solid; max-width: 49%; margin-left: 7px;"><br />

           <div class="margin-bottom-20">   
                                                          	<label>Términos y condiciones</label>
															<textarea class="form-control" rows="5" style="resize:none;" id="term">Proporcionar información útil a exportadores, importadores, agentes de comercio exterior respecto de mercados externos, oportunidades comerciales, datos históricos de estos, como así también a mantener actualizado en lo posible el calendario de  ferias informar sobre misiones comerciales, proporcionar estadísticas sobre cuestiones relacionadas al comercio exterior e información general sobre la producción argentina. 
Teniendo en cuenta que las Entidades participante de este sitio de INTERNET directorioexportador.produccionrosario.gob.ar sólo prestan un servicio orientativo, no serán responsables ni podrán ser sujetos pasivos de reclamo judicial o extrajudicial alguno por parte de cualquier usuario de la información reproducida en este portal.</textarea>                                                                                
                                        	</div>
                                            
<label style="width:auto;">
												<div style="float:left;"><span><input type="checkbox" id="acepta"></span></div>  Acepta los Términos y Condiciones </label>                                            
<div class="form-actions" style="margin-left: 6px; margin-bottom:4px;">
									<button type="submit" class="btn blue">Enviar</button>
									<button type="button" class="btn default">Cancelar</button>
								</div></div>                                            

                                        
        
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

<script type="text/javascript" src="../assets/admin/includes/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
<script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
 <script src="http://malsup.github.com/jquery.form.js"></script> 
<!-- END PAGE LEVEL SCRIPTS -->

<script type="text/javascript">
        // wait for the DOM to be loaded 
$(document).ready(function() { 
	// bind 'myForm' and provide a simple callback function 
	$('#direc_form_1').ajaxForm(function() { 
		alert("Hemos recibido los datos correctamente. Gracias!"); 
		location.href="index.php";							
	}); 

	a8s();
	of8();
	pp8();
		
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
	ajax.open('POST','frm_procces.php');
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
</body>
<!-- END BODY -->
</html>