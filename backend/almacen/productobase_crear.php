	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
     
    <script type="text/javascript">
      $(function(){
        $("#form1").submit(function(){
          $.ajax({
            type:"POST",
            url:"guardar_productobase.php",
            dataType:"html",
            data:$(this).serialize(),
            beforeSend:function(){
              $("#loading").show();
            },
            success:function(response){
                $("#response").html(response);
                $("#loading").hide();
            }

          })
          return false;
        })

      })
      </script>


<form name="form1" id="form1" method="post">
		<label for="">NOMBRE:</label>
		<input type="text" name="pNombre">
		<label for="">DESCRIPCION</label>
		<input type="text" name="pDescripcion">
		<label for="">Precio</label>
		<input type="text" name="pPrecio">
		<label for="">FAMILIA</label>
		<input type="text" name="pFamilia">
		<label for="">IMAGEN</label>
		<input type="text" name="pImg">
		<label for="">THUMB</label>
		<input type="text" name="pThumb">
    <label for="">ID_CARTA</label>
		<input type="text" name="idCarta">
        
    <button type="submit">Guardar »</button>
		<!--<input type="submit" value="Guardar" name="btn_guardar">-->
	</form>
    
    <div id="loading" style="display:none;"><img src="loading.gif" ></div>
    <div id="response"></div>