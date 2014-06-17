<!--Registro_Materiales.php-->
<meta content="900" http-equiv="REFRESH"> </meta>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h1>Registro de Materiales</h1>
            </div>
        </div>
        <div class="row">
            <form class="form" action="Materiales/ValidarRegistroMateriales.php" name="registro_materiales" method="POST">
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <select name="tipo_material" id="tipo_material" class="form-control" required="true">
                                <option value="">Seleccione Tipo</option>
                                    <?php
                                    require_once("Materiales/funciones.php");
                                    $tipo = devuelveTipoMaterial();

                                    foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                    }
                                    ?>                                
                                <option value="otro">Otro</option>
                            </select>
                           
                            <br/>
                            <input type="text" class="form-control" id="tipo_otro" name="tipo_otro" placeholder="Escriba Tipo" style="display: none">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <select name="material" id="material" class="form-control" required="true">
                                <option value="" >Seleccione Material</option>
                                
                            </select>
                            <br/>
                            <input type="text" class="form-control" id="material_otro" name="material_otro" placeholder="Escriba Material" style="display: none">
                        </div>
                    </div>                    
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-7">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="descripcion" placeholder="Descripción del Material" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>  
                </div>                
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="alto" placeholder="Alto" required="true">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="largo" placeholder="Largo" required="true">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ancho" placeholder="Ancho" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="precio1" placeholder="Precio Referencial 1" required="true">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="precio2" placeholder="Precio Referencial 2">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="precio3" placeholder="Precio Referencial 3">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>                
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary btn-large" value="Enviar">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>
            </form>
        </div>
<script type="text/javascript">
   function selecciona_otro(){
       var valor=document.getElementById('tipo_material').value;
       if(valor==='otro'){
           document.getElementById("tipo_otro").style.display="block";
           document.getElementById("tipo_otro").required=true;
           
           selecciona_material(valor);
       }else{
           document.getElementById("tipo_otro").style.display="none";
           document.getElementById("tipo_material").required=true;
//           document.getElementById("material").required="true"; 
           selecciona_material(valor);
       }
   }

   function selecciona_material(tipo_sel){
//       alert(tipo_sel);
       if(tipo_sel==='otro'){
           document.getElementById("material").disabled=true;
           document.getElementById("material_otro").style.display="block";
           document.getElementById("material_otro").required=true;
           document.getElementById("material").required=false;   
           document.getElementById("tipo_material").required=false;
//           alert(tipo_sel);
       }else{
           document.getElementById("material").disabled=false;
           document.getElementById("material_otro").required=false;
           document.getElementById("material_otro").style.display="none";
           document.getElementById("material").required=true;        
           document.getElementById("tipo_material").required=true;
//           alert(tipo_sel);
       }
   }
</script>
<script>
    
$("#tipo_material").on("change", buscarMateriales);
$("#material").on("change", buscarDetalles);

function buscarMateriales(){
	
	$tipo = $("#tipo_material").val();
	
	if($tipo === ""){
			$("#material").html("<option value=''>Seleccione Material</option>");
                        selecciona_otro();
	}else if($tipo === "otro"){
			$("#material").html("<option value='otro'>Otro</option>");                        
                            selecciona_otro();
                        
	}else {
		$.ajax({
			dataType: "json",
			data: {"tipo_material": $tipo},
			url:   'Materiales/buscar.php',
			type:  'post',
			beforeSend: function(){
				//Lo que se hace antes de enviar el formulario
				},
			success: function(respuesta){
				//lo que se si el destino devuelve algo
				$("#material").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
                selecciona_otro();
	}
        
}   
function buscarDetalles(){
	
	$tipo = $("#material").val();

            selecciona_material($tipo);

}
   
</script>
    
       
