<?
include('conexion.php');
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

    $peticion="INSERT INTO productos(pNombre,pDescripcion,pPrecio,pFamilia,pImg,pThumb,idCarta,pTicket) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($peticion);
    $stmt->bind_param('dds',$pNombre,$pDescripcion,)
?>