<?
require_once('model.php');
$getPersonas = getPersonas	($idx);
$cont = 1;
foreach($getPersonas as $getPersonas): 
 	{		
	 
	 echo '<tr>
                      <td>'.$getPersonas['pId'].'</td>
                      <td>'.$getPersonas['pApellidos'].'
                      <td>'.$getPersonas['pNombres'].'</td>
                      <td>'.$getPersonas['pFechNac'].'</td>
					  <td>'.$getPersonas['pSexo'].'</td>
					  <td>'.$getPersonas['pTelCell'].'</td>
					  <td>'.$getPersonas['rNombre'].'</td>
					  <td>'.$getPersonas['pAlias'].'</td>
					  <td>'.$getPersonas['pFechReg'].'</td>
					  <td><a href="actualizar_usuario?idusuario='.$getPersona['pId'].'"> Actualizar</a></td>
                      </tr>';
	 
	 //echo 'Nombres :'.$getPersona['pNombres'].' Apellidos :'.$getPersona['pApellidos'].' Rol: '.$getPersona['pCargo'].'Alias :'.$getPersona['pAlias'] ;
 	 //echo "<a href='usuario_modificar' value='$cont'> Modificar</a>".'</p>';
 	 //$cont++;
	 
 	}
 endforeach; 
//echo '</div><a href="usuario_crear"> Nuevo Usuario</a>';

?>
