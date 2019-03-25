<?
mysql_connect('localhost','root','123456');
mysql_select_db('restaurante');
if(isset($_POST['submit']))
{
    $pNombre=$_POST['pNombre'];
    $pDescripcion=$_POST['pDescripcion'];
    $pPrecio=$_POST['pPrecio'];
    $pFamilia=$_POST['pFamilia'];
    $pImg=$_POST['pImg']; 
    $pThumb=$_POST['pThumb'];
    $idCarta=$_POST['idCarta'];
    $pTicket=$_POST['pTicket'];

    mysql_query("INSERT INTO productos(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta,pTicket) VALUES('$pNombre','$pDescripcion','$pPrecio','$pFamilia','$pImg','$pThumb','$idCarta','$pTicket')");
     
    echo "<script>alert('Producto guardado con exito');window.location.href ='producto.php';</script>";
    
                                
   
    

}
?>