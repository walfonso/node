/** validaciones **/
function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
var normalize = (function() {
  var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
      to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
      mapping = {};
 
  for(var i = 0, j = from.length; i < j; i++ )
      mapping[ from.charAt( i ) ] = to.charAt( i );
 
  return function( str ) {
      var ret = [];
      for( var i = 0, j = str.length; i < j; i++ ) {
          var c = str.charAt( i );
          if( mapping.hasOwnProperty( str.charAt( i ) ) )
              ret.push( mapping[ c ] );
          else
              ret.push( c );
      }
      return ret.join( '' );
  }
 
})();

function campoError(campo)
{
	campo.className=claseError;
	//error=1;
}

function campoNormal(campo)
{
	campo.className=claseNormal;
	error=0;
}

function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
           alert ("Solo Números");
		   return "";
        }
        return Numer;
    }
function ValNumero(Control){
	Control.value=Solo_Numerico(Control.value);
}

function newajax()
{ 
	var xmlhttp=false; 
	try 
	{ 
		// No IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!="undefined") { xmlhttp=new XMLHttpRequest(); } 
	return xmlhttp; 
}
	
function validanumero(valor,nombre){ if(isNum(valor)) {campoError(document.getElementById(nombre));} }

function validaLongitud(valor, permiteVacio, minimo, maximo)
{
	var cantCar=valor.length;
	if(valor=="")
	{
		if(permiteVacio) return true;
		else return false;
	}
	else
	{
		if(cantCar>=minimo && cantCar<=maximo) return true;
		else return false;
	}
}
	
		function veremos (msg){
			document.getElementById(msg).style.visibility="hidden";
			clearInterval(13000)	
			var form=document.getElementById("form1");					
			form.reset();
			form.nombres.focus();
		}	
		
function checkr(seba1)
{		
	
	contened=document.getElementById("con_res1");
	form=document.getElementById("form1"); 
	var dni=form.dni.value;	
	
	
	if (validaLongitud(form.dni.value,0,8,8)) {
			var dni = form.dni.value;
		} else { document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese un DNI Valido"; form.dni.focus(); return false; }

	document.getElementById('checkmail').style.visibility="visible";
	var ajax=newajax();
	ajax.open("POST", "checkrf.php", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("dni="+dni+"&runproc=2229");
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4)
		{
			var respuesta=ajax.responseText;
			if(respuesta==1)
			{
				var texto=respuesta;
				document.getElementById("con_res1").style.visibility="visible";
				contened.innerHTML="Usted ya se encuentra registrado en nuestra base de datos y será contactado a la brevedad.";					
				document.getElementById('checkmail').style.visibility="hidden";	
		
			}
			if(respuesta==0)
			{
				document.getElementById("con_res1").addclass="dis1";
				document.getElementById("con_res1").style.visibility="hidden";
				
				form.sexo.focus();								
				document.getElementById('checkmail').style.visibility="hidden";				
				
			}										
		}
	}
}  		
	
function frm_valid (){
	var contenedor = document.getElementById("con_res");
	var form=document.getElementById("form1");
	
	var nombres = normalize(form.nombres.value);
	if (form.nombres.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Nombre Valido"; form.nombres.focus(); return false; }	 else {document.getElementById("con_res1").style.visibility="hidden"}
	
	var apellidos = normalize(form.apellidos.value);
	if (form.apellidos.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Apellidos Valido"; form.apellidos.focus(); return false; } else {document.getElementById("con_res1").style.visibility="hidden"}
	
	if (validaLongitud(form.dni.value,0,8,8)) {
		var dni = form.dni.value;
	} else { document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese un DNI Valido"; form.dni.focus(); return false;}
	
	var sexo=form.sexo.options[form.sexo.selectedIndex].value;
	if (form.sexo.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Edad Valida"; form.sexo.focus(); return false; } else {document.getElementById("con_res1").style.visibility="hidden"}	
	
	var edad = form.edad.value;
	if (form.edad.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.sexo.focus(); return false; } 
	
	if (form.edad.value < 18) {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.sexo.focus(); return false; }

	if (form.edad.value > 35) {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.sexo.focus(); return false; }	

	
	var nacimiento = form.nacimiento.value;
	if (form.nacimiento.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Fecha de Nacimiento Valida"; form.nacimiento.focus();return false;} 	

	var nacionalidad = form.nacionalidad.options[form.nacionalidad.selectedIndex].value;	
	if (form.nacionalidad.value == "Otros" || form.nacionalidad.value == "seleccione") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.nacionalidad.focus(); return false; }	
		
	var estadocivil = form.estadocivil.options[form.estadocivil.selectedIndex].value;	
		
	var hijos = form.hijos.options[form.hijos.selectedIndex].value;		
	var discapacidad = form.discapacidad.options[form.discapacidad.selectedIndex].value;		
	
	var telefonolinea = form.telefonolinea.value;
	if (form.telefonolinea.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese un Número de Telefono Valido"; form.nombres.focus();return false;} 	
	
	var telefonocelular = form.telefonocelular.value;
	var email = form.email.value;
	if (form.email.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese un Email Valido"; form.nombres.focus();return false;} 	
	
	var repetiremail = form.repetiremail.value;		
	if (form.email.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese un Email Valido"; form.nombres.focus();return false;} 	
	
	var resideenlomas = form.resideenlomas.options[form.resideenlomas.selectedIndex].value;		
	var calle = form.calle.value;
	if (form.calle.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Calle Valida"; form.nombres.focus();return false;} 	
			
	var numero = form.numero.value;		
	if (form.numero.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Numero de dirección Valido"; form.nombres.focus();return false;} 	

	var piso = form.piso.value;		
	if (form.piso.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Piso correcto o Cero"; form.nombres.focus();return false;} 	

	var dpto = form.dpto.value;	
	if (form.dpto.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Número de Depto o Cero"; form.nombres.focus();return false;} 	

	var calle1 = form.calle1.value;		
	if (form.calle1.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Entre las Calles(1) Valida"; form.nombres.focus();return false;} 	

	var calle2 = form.calle2.value;		
	if (form.calle2.value== "") {document.getElementById("con_res1").style.visibility="visible"; document.getElementById("con_res1").innerHTML="Ingrese Entre las Calles(2) Valida"; form.nombres.focus();return false;} 	
	
	var codigopostal = form.codigopostal.value;		
	if (form.codigopostal.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese Entre las Cod. Postal Valido"; form.codigopostal.focus();return false;} 	
	
	var localidad = form.localidad.value;		
	if (form.localidad.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese Localidad Valida"; form.localidad.focus();return false;} 	
		
	var escuelasecundaria = form.escuelasecundaria.value;
	if (form.escuelasecundaria.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese Escuela Secundaria Valida"; form.escuelasecundaria.focus();return false;} 	
			
	var escuelalocalidad = form.escuelalocalidad.value;		
	if (form.escuelalocalidad.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese Localidad de Escuela Secundaria Valida"; form.escuelalocalidad.focus();return false;} 	
	
	var escuelaprovincia = form.escuelaprovincia.value;		
	if (form.escuelaprovincia.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese Provincia de Escuela Secundaria Valida"; form.escuelaprovincia.focus();return false;} 	

	var escuelafinalizacion = form.escuelafinalizacion.value;		
	if (form.escuelafinalizacion.value== "") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Ingrese año de finalización de Escuela Secundaria Valido"; form.escuelafinalizacion.focus();return false;} 	

	var adeudamaterias = form.adeudamaterias.options[form.adeudamaterias.selectedIndex].value;		
	if (form.escuelasecundaria.value== "seleccione") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.adeudamaterias.focus();return false;} 	
	if (form.escuelasecundaria.value== "si") {document.getElementById("con_res").style.visibility="visible"; document.getElementById("con_res").innerHTML="Usted no cumple con uno o más de los requisitos obligatorios para inscribirse en la Escuela de Policía Local"; form.adeudamaterias.focus();return false;} 		

	var string = "nombres="+normalize(nombres)+"&apellidos="+apellidos+"&dni="+dni+"&sexo="+sexo+"&edad="+edad+"&nacimiento="+nacimiento+"&nacionalidad="+nacionalidad+"&estadocivil="+estadocivil+"&hijos="+hijos+"&discapacidad="+discapacidad+"&telefonolinea="+telefonolinea+"&telefonocelular="+telefonocelular+"&email="+email+"&repetiremail="+repetiremail+"&resideenlomas="+resideenlomas+"&calle="+calle+"&numero="+numero+"&piso="+piso+"&dpto="+dpto+"&calle1="+calle1+"&calle2="+calle2+"&codigopostal="+codigopostal+"&localidad="+localidad+"&escuelasecundaria="+escuelasecundaria+"&escuelalocalidad="+escuelalocalidad+"&escuelaprovincia="+escuelaprovincia+"&escuelafinalizacion="+escuelafinalizacion+"&adeudamaterias="+adeudamaterias


	
	var ajax=newajax();
	ajax.open("POST", "frm_process.php?&proc=1vx524", true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	document.getElementById("saved").style.visibility="visible";

	
	ajax.send(string);
	
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4)
		{
			var respuesta=ajax.responseText;
			if(respuesta==1)
			{
				document.getElementById("saved").style.visibility="hidden";
				contenedor.style.display="block";
				contenedor.innerHTML="Ya está preinscripto a la Escuela de Policía Local de Lomas de Zamora. Sus datos han sido recibidos y será contactado a la brevedad por el equipo de reclutamiento del Municipio de Lomas de Zamora";
				form.reset();
				document.location.href = "http://www.lomasdezamora.gov.ar/policialocal";
				
			}
			else
			{
				document.getElementById("saved").style.visibility="hidden";
				alert("Error Desconocido");
				
			}
												
		}
	}	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}



