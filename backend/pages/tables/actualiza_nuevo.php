<?
  include 'conexion.php';
  $consulta =ConsultarProducto($_GET['idProducto']);
  return;
  function ConsultarProducto($idProducto)
  {
      $sentencia="SELECT * FROM productos WHERE idProducto='".$idProducto."'";
      $resultado=mysql_query($sentencia) or die(mysql_error());
      $filas=mysql_fetch_assoc($resultado);
      /*return[
          $filas['pNombre'],
          $filas['pDescripcion'],
          $filas['pPrecio'],
          $filas['pFamilia'],
          $filas['pImg'],
          $filas['pThumb'],
          $filas['idCarta'],
          $filas['pTicket']          
      ];*/
      echo 'ConsultarProducto';
  }
?>