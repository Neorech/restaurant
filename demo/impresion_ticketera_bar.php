<!--style>

#impresion > th {
    font-weight: normal;
    text-align: left;
}
</style>
<script language="Javascript">


function imprimir() {
if (window.print)
window.print()
else
alert("Para imprimir presione Crtl+P.");
}

</script>-->
<?
/*
$link = mysql_connect("localhost", "root","123456"); 
mysql_select_db("restaurante", $link);
$idx=$_GET['id']; 

$sqlQuery = "SELECT 
				v.vId,
				v.vCantidadProducto,
				v.vFecha,
				v.vIdTiket,
				v.vMesa,
				vd.vdId,
				vd.vd_Cantidad,
				vd.vd_Costo,
				vd.vd_Estado,
				p.pNombre,
				p.pPrecio,
				per.pNombres,
				per.pApellidos
			FROM venta v
			inner JOIN venta_detalle vd on
				vd.vId=v.vId
			INNER JOIN productos p on
				vd.vd_idProducto = p.idProducto
				AND p.pTicket ='0'
			INNER JOIN persona per on
				v.vIdpersona = per.pId
				and vd.vId='$idx'
				and vd.vd_Cantidad > 0"; 
$result = mysql_query($sqlQuery, $link); 

echo '<center>***************************<br>SUPER HOUSE <br>***************************<br>TICKET BAR - SOLO BEBIDAS</center><br>';
//echo '<input type="button" onclick="javascript:imprimir();" value="Imprimir" name="imprimir"><br>';
//echo 'NOTA DE PEDIDO<br>';
echo '<table width="334" class="testgrid">
  <tr>
    <td>Cant</td>
    <td>Producto</td>
	<td>Costo</td>
  </tr>';
if ($row = mysql_fetch_array($result)){ 
	echo 'Mesa : '.$row["vMesa"];
	echo "</br>";
	echo 'Personal : '.$row["pNombres"];

	do 
	{ 
   		//echo '<tr id="'.$row['vdId'].'" class="producto'.$row['vd_Estado'].'">
		
		echo '<tr id="impresion">
		
    	<th> '.$row["vd_Cantidad"].'<div id="estadoplato"></div></th>
    	<th>'.$row["pNombre"].'</th>
  		
		<th> '.$row["vd_Costo"].'.00</th>
		
		</tr>';
		$Costo=$row["vd_Costo"]+$Costo;
		//<a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesa['mNumero']. '\'); return false;" href="#">Completo </a>
		//echo 'Personal : '.$row["pNombres"].' '.$row["pApellidos"].' '.$row["Apellidos"].'Fijo : '.$row["Celular"].'';
		}
	while ($row = mysql_fetch_array($result)); 
    	}
	else 
	 	{ 
		echo 'agregar Cliente';
		} 
		echo '<tr class="impresion">';
		echo '<th> </th>';
		echo '<th> Total: </th>';
		echo '<th> '.$Costo.'.00</th>';
		echo '</tr>';
		
		
		//echo '<div class="info"><a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesaCaja['mNumero']. '\',\''.$Costo.'\',\'EFECTIVO\'); return false;" href="#">    <img src="imagenes/icono/efectivo.png" width="70" height="60" alt="cash" /></a>

//echo '<a onclick="javascript:actualizaestadomesa(\''.$getEstadoMesaCaja['mNumero']. '\',\''.$Costo.'\',\'VISA\'); return false;" href="#"><img src="imagenes/icono/visa.png" width="70" height="40" alt="visa" /></a></div>';
		$Costo=0;
		echo '</table>';
	
	$hora = new DateTime();
	$hora->setTimezone(new DateTimeZone('America/Bogota'));
	$fecha=date($hora->format('Y/m/d H:i:s'));
		
	echo '<br><center>***************************<br>BAR<br>***************************<br></center>';
	echo $fecha;	
	echo '<script type="text/javascript">window.print();</script>';
	//echo "<script>document.location = 'inicio.php?id=$id';</script>";
	$rstop = mysql_query("SELECT vId FROM venta order by vId desc limit 1");
	//mysql_query("UPDATE mesa SET mEstado= '0', mPago = '1' where mId =".$idmesa." ;");
	if ($rowtop = mysql_fetch_row($rstop)) {
		$topuno = trim($rowtop[0]);
	}
	echo "<script>document.location = 'impresion_ticketera_cocina.php?id=$topuno';</script>";
*/
?>      
        