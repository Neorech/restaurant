<style type="text/css">
.info, .exito, .alerta, .error {
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
border: 1px solid;
margin: 10px 8px;
padding:15px 10px 15px 10px;
background-repeat: no-repeat;
background-position: 10px rigth;
position:relative;
width: 336px;
float:left;
}
.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/info.png');
}
.exito {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/exito.png');
}
.alerta {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/alerta.png');
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('http://webintenta.com/uploads/Files/Images/v8/Mensajes/error.png');
}
.producto0 {
    border: 1px solid #b1b1b1;
	background:#fff;
	font-size: 16px;
    text-align: left;
	
    /*white-space: nowrap;*/
}
.producto1 {
    border: 1px solid #b1b1b1;
	background:none repeat scroll 0 0 #d1d1d1;
	font-size: 16px;
    text-align: left;
	/*text-decoration:line-through; 
	color: red
	*/
    /*white-space: nowrap;*/
	text-decoration:none;
}
.producto1 a{
color:#999;
text-decoration:none;
}

.producto0 a{
color:#333;
text-decoration:none;
}
th {
    padding: 12px;
}
.testgrid{
    background: none repeat scroll 0 0 #d1d1d1;
    border: 1px solid #b1b1b1;
}

.info {
       color: #00529B;
       background-color: #BDE5F8;
       background-image: url('imagenes/info.png');
	   width: 80%;
	   margin: 10px 0;
    padding: 15px 10px 15px 50px;
}
#botonpedido{
	
	background:#fff;
	color: #333;
	border:1px solid #c2c2c2;
	padding: 12px;
	text-decoration: blink;
	margin: 0 14px
	}
</style>
<script>
function actualizaestadomesa(mesa)
{
		//alert('mensaje'+mesa);
		confirmar=confirm('Desea Confirmar la Atencion de la mesa: ' +mesa); 
		if (confirmar) 
		{
			//alert('Has dicho que si');
			$(estadomesa).load('actualizaestadomesa.php?id='+ mesa);
		}
		else 
		{
			//alert('Acción Cancelada'); 
		}
		
		
		//var activ = '#' + div;
		//var idproducto = desde;
		//$(activ).load('personapedido.php?id='+ desde);
		//$(activ).removeAttr('id');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}

function actualizaestadoplato(plato,estado)
{
		//alert('mensaje'+plato);
		
		if(estado!='1') 
		{
		$(estadoplato).load('actualizaestadoplato.php?id='+ plato+'&estado='+estado);
		var activ = '#' + plato;
		$(activ).removeAttr('class');
		$(activ).addClass('producto1');
		//alert('if');
		}
		else
		{
		$(estadoplato).load('actualizaestadoplato.php?id='+ plato+'&estado='+estado);
		var activ = '#' + plato;
		$(activ).removeAttr('class');
		$(activ).addClass('producto0');
		//alert('else if');
		}
		
		//$('#1973').removeAttr('class');
		//$('#1973').addClass('producto1');
		
		//$('#total_costo_final').html("Costo Total: <input type='text' value='0.00' class='costofinal' id='costo_total'>");
		//$('#productosreinicio').html("<div id='productosreinicio' class='scProductList'><div id='10663'></div></div>");
		//$('#productosreinicio').removeAttr('class');
		//$('#productosreinicio').removeAttr('id');
}

function eliminaplato(plato,estado)
{
		
		$(estadoplato).load('eliminaplato.php?id='+ plato+'&estado='+estado);
		var activ = '#' + plato;
		//$(activ).removeAttr('class');
		//$(activ).addClass('producto0');
		alert('CONFIRMAR - PLATO ELIMINADO');
		
}
function eliminapedido(plato,estado)
{
		
		$(estadoplato).load('eliminapedido.php?id='+plato+'&estado='+estado);
		var activ = '#' + plato;
		//$(activ).removeAttr('class');
		//$(activ).addClass('producto0');
		alert('CONFIRMAR - PLATO ELIMINADO' + plato +'_____'+ estado);
		
}



</script>

<?

require_once('model.php');
$idx =$_GET[id];
$getEstadoMesas = getEstadoMesas($idx);
//echo "holas";
//Este contenido va a cambiar :D</div>
$hora = new DateTime();
$hora->setTimezone(new DateTimeZone('America/Bogota'));
$fecha_b=date($hora->format('Y/m/d H:i:s'));
//echo $fecha_b;
 function minutos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}
function segundos_transcurridos($fecha_i,$fecha_f)
{
$minutos = (strtotime($fecha_i)-strtotime($fecha_f));
$minutos = abs($minutos); $minutos = floor($minutos);
return $minutos;
}
//echo '12345678';

 foreach($getEstadoMesas as $getEstadoMesa):
 	$cantidadventas=$cantidadventas + 1;
  	
	$fecha_a= $getEstadoMesa['mFecha'];
  
 	$tiempo =minutos_transcurridos($fecha_a,$fecha_b); 
 	if ($tiempo<=15) 
 	{
		$clase='exito';
	}
	else
	{
		$clase='error';
	}
 	//echo "<div id='789'>";
	echo "<div class=".$clase.">";
	//echo "Tiempo: ".$tiempo.'<p>'; 
	
	
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getEstadoMesa['mFecha']."<p>";
	echo "<h2>Orden: ". $cantidadventas."</h2>";
	echo '<h2>Mesa: '.$getEstadoMesa['mNumero']. '    Tiempo: '.$tiempo.'<a onclick="javascript:eliminapedido(\''.$getEstadoMesa['nVenta']. '\',\''.$getEstadoMesa['mNumero']. '\'); return false;" href="#" id="botonpedido" href="#"> Eliminar </a></h2><p>' ;
	//echo '<div class='.$getEstadoMesa['mNumero'].'>realizado'.$getEstadoMesa['nVenta'].'</div>';
	echo '<div class='.$getEstadoMesa['mNumero'].'></div>';
	
	echo '<div class="info"> 
	
	<a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesa['mNumero']. '\'); return false;" href="#">Completo </a>
	<h3>'.$getEstadoMesa['nObservacion'].'</h3></div>';
	$idx=$getEstadoMesa['nVenta'];
	$timbre=$timbre + $getEstadoMesa['nTimbre'];
	
	//echo "__________".$getEstadoMesa['nTimbre'];
	if ($getEstadoMesa['nTimbre']==1)
	{	
	echo "escojido".$idxver=$getEstadoMesa['nVenta'];
	$segundostiempoescojido = segundos_transcurridos($fecha_a,$fecha_b);
	$_SESSION['test']=$segundostiempoescojido;
	
	}
	
	//echo '______________'.$getEstadoMesa['nTimbre'];
	include 'impresion_lista.php';
	echo '</div>';
	
	
	
 	endforeach; 
	echo '<div id="estadomesa"> </div>'; 
	//echo $cantidadventas;
	//$_SESSION['test'] = 42;
	//$test = 43;
	//echo $_SESSION['test'];
	//$_SESSION['sound']=6;
	//$_SESSION['playsonido']=$cantidadventas;
	//$_SESSION["sound"]=5;
	//echo "_______________".$cantventas;
	
	//echo $_SESSION['playsonido'];
	$segundostiempo =segundos_transcurridos($fecha_a,$fecha_b);
	//echo $segundostiempo;
	if($timbre > 0)
	{
		//$link = "sound/looking_up.mp3"; 
		
		//$audio = "<embed src='".$link."' width='0px' height='0px'>"; 
		//echo $audio;
		/*echo $audio;
		echo $audio;
		echo $audio;
		echo $audio;*/		
		//sleep(1);
		//echo $idx;
		//x$regEstadoTimbres = regEstadoTimbres($idx);
	}
	//$_SESSION['test'] = 42;
	$test = 43;
	//echo "_________________".$_SESSION['test'];
	
	if($segundostiempo > 5)
	{
	
	//echo $idx;
	//$regEstadoTimbres = regEstadoTimbres($idxver);
	//echo "/////////////".$segundostiempoescojido;
	//echo "_________________".$_SESSION['test'];
	
	}
	
?>