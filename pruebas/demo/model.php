<?php
function getAllPosts()
{
	
	
	
  // Connecting, selecting database
  $link = mysql_connect('localhost', 'root', '123456');
  mysql_select_db('restaurante', $link);
 
  // Performing SQL query
  $result = mysql_query('SELECT id, pNombre, pDescripcion, pPrecio FROM productos', $link);
 
  // Filling up the array
  $cproductos = array();
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {
     $cproductos[] = $row;
  }
 
  // Closing connection
  mysql_close($link);
 
  return $cproductos;
}
?>