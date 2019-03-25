<?
 $conexion = mysql_connect("localhost","root","123456");
 mysql_query("restaurante",$conexion);
 mysql_query("SET NAMES 'utf8'");

 $sentencia="SELECT * FROM productos";
 $resultado=mysql_query($sentencia);
 while($filas=mysql_fetch_assoc($resultado))
 {
    echo "<tr>";
        echo"<td>"; echo $filas['id']; echo "</td>";
        echo"<td>"; echo $filas['pNombre']; echo "</td>";
        echo"<td>"; echo $filas['pDescripcion']; echo "</td>";
        echo"<td>"; echo $filas['pPrecio']; echo "</td>";
        echo"<td>"; echo $filas['pImg']; echo "</td>";
        echo"<td>"; echo $filas['pThumb']; echo "</td>";
        echo"<td>"; echo $filas['idCarta']; echo "</td>";
        echo"<td>"; echo $filas['pTicket']; echo "</td>";

    echo"</tr>";
 }
?>