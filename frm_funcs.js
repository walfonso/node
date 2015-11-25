/** validaciones **/
function justNumbers(e,id)
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
		
	
	
