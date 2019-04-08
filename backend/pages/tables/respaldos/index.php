<?
 $db_host = 'localhost';
 $db_name = 'restaurante';
 $db_user = 'root';
 $db_pass = '123456';
 //$backupRoute = "C:\backups";

 $fecha = date("Ymd-His");
 $salida_sql = $db_name.'_'.$fecha.'.sql';
 $dump = "C:\appserv\mysql\bin\mysqldump --user=".$db_user." --password=".$db_pass." --host=".$db_host." ".$db_name." > .$backupRoute.$salida_sql";
 system($dump, $output);

// include ('Mail.php');
// include ('Mail/mime.php');

?>