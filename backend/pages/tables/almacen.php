<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ingresos y Egresos</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <? 
	  include ('menu_cabecera.php');
	  ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?
      include ('menu_izquierda.php');
	  ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            ALMACÉN
            <small>Ingresos & Egresos</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li><a href="#">Almacén</a></li>
            
            
            <li class="active">Ingreso & Egreso</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row"><!-- /.col --><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Consulta por Fecha</h3>
                  <HR> 
                  <input type="date" name="ifecha" step="1" value="
				  <?php echo date("Y-m-d");
				  ?>">
                  <input type="date" name="ffecha" step="1" value="
				  <?php echo date("Y-m-d");
				  /*$ffecha=$_GET['ffecha'];	
				  if ($ffecha==null)
				  {
				  $ffecha=date("Y-m-d");
				  }
				  echo $ffecha;*/
				  ?>">
                  
                  <script>
                  function impresionfecha(ifecha,ffecha)
				  {
				  //alert('impresion');
				  window.open("reporte_imp/ingreso_egreso.php?ifecha="+ifecha+"&ffecha="+ffecha+"","VENTAS","width=900,height=600")
				  //window.open("pagina.html","miventana","width=900,height=200,menubar=no")
				  }
				  
				  </script>
                  
                  <script> 
  function busquedafecha()
{
	//var activ = '#' + div;
	//var idproducto = desde;
	var inicio=document.getElementsByName("ifecha")[0].value;
	var fin=document.getElementsByName("ffecha")[0].value;
	//alert('mensaje' +inicio +' fin' + fin);
	
	location.href="?ifecha="+inicio+"&ffecha="+fin
	//$(activ).load('lista_productos1.php?id='+ desde);
	//$(activ).removeAttr('id')
	
}
</script>
<a onclick="javascript:busquedafecha(); return false;" href="#"> <img width="40" height="40" alt="Buscar" src="../images/lupa.png"></a>
<a onclick="javascript:impresionfecha('<? echo $_GET['ifecha'];?>','<? echo $_GET['ffecha'];?>'); return false;" href="#"> <img width="40" height="40" alt="Buscar" src="../images/printer.png"></a>


<HR> 
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                  <?
                  include('ejemplo700.php'); 
                  ?>
                  <!--
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </table>-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versión</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 <a href="http://h&eaplicaciones.com">H&E Aplicaciones</a>.</strong> Todos los derechos reservados.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
