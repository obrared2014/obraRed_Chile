<!-- presupuesto -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h1>Generar Presupuesto</h1>
        </div>
    </div>   
</div>


<form class="form-horizontal" action="Index.php?sec=Cotizacion" method="POST" name="form_presupuesto_medidas">
    <div class="row">        
        <div class="col-xs-3">
            <div class="panel panel-default">
             <div class="panel-heading">Seleccione el tipo de construcción</div>
             <div class="panel-body">
                <select name="construccion" id="construccion" class="form-control">
                    <option value="">Elija su Opción</option>
                    <option value="1">Techo</option>
                    <option value="2">Radier</option>
                    <option value="3">Muro</option>
                    <option value="4">Casa</option>                                
                </select>
             </div>
           </div>    
        </div>
        <div class="col-xs-9"><!-- panel solicitando las medidas de la obra-->
            <div class="panel panel-default">
                <div class="panel-heading">Ingrese las Medidas de su obra</div>
                <div class="panel-body">

                    <div class="form-group">
                        <div class="col-xs-1"><label>Alto</label></div>
                        <div class="col-xs-3"> 
                            <input type="text" class="form-control" name="altura"/> 
                        </div> 
                        <div class="col-xs-1"><label>Ancho</label></div>
                        <div class="col-xs-3"> 
                            <input type="text" class="form-control" name="ancho"/> 
                        </div> 
                        <div class="col-xs-1"><label>Largo</label></div>
                        <div class="col-xs-3"> 
                            <input type="text" class="form-control" name="largo"/> 
                        </div>

                    </div>
                </div>

            </div><!-- fin panel medidas-->

        </div>
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">Seleccione los productos</div>
                <div class="panel-body">
                    <div class="form-group">
                        <select name="tipo_material1" id="tipo_material1" class="form-control">
                            <option value="">Seleccione Tipo</option>
                                <?php
                                    require_once("Materiales/funciones.php");
                                    $tipo = devuelveTipoMaterial();

                                    foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                    }
                                ?>                                
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="material1" id="material1" class="form-control">
                            <option value="" >Seleccione Material</option>

                        </select>
                     </div>  
                </div>
            </div>
         </div>
                <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">Seleccione los productos</div>
                <div class="panel-body">
                    <div class="form-group">
                        <select name="tipo_material2" id="tipo_material2" class="form-control">
                            <option value="">Seleccione Tipo</option>
                                <?php
                                    require_once("Materiales/funciones.php");
                                    $tipo = devuelveTipoMaterial();

                                    foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                    }
                                ?>                                
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="material2" id="material2" class="form-control">
                            <option value="" >Seleccione Material</option>

                        </select>
                     </div>  
                </div>
            </div>
         </div>       
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">Seleccione los productos</div>
                <div class="panel-body">
                    <div class="form-group">
                        <select name="tipo_material3" id="tipo_material3" class="form-control">
                            <option value="">Seleccione Tipo</option>
                                <?php
                                    require_once("Materiales/funciones.php");
                                    $tipo = devuelveTipoMaterial();

                                    foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                    }
                                ?>                                
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="material3" id="material3" class="form-control">
                            <option value="" >Seleccione Material</option>

                        </select>
                     </div>  
                </div>
            </div>
         </div>       
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">Seleccione los productos</div>
                <div class="panel-body">
                    <div class="form-group">
                        <select name="tipo_material4" id="tipo_material4" class="form-control">
                            <option value="">Seleccione Tipo</option>
                                <?php
                                    require_once("Materiales/funciones.php");
                                    $tipo = devuelveTipoMaterial();

                                    foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                    }
                                ?>                                
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="material4" id="material4" class="form-control">
                            <option value="" >Seleccione Material</option>

                        </select>
                     </div>  
                </div>
            </div>
         </div>               
    </div>         
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary btn-large" value="Cotizar">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>
</form>

<script>
    
$("#tipo_material1").on("change", buscarMateriales);
$("#tipo_material2").on("change", buscarMateriales2);
$("#tipo_material3").on("change", buscarMateriales3);
$("#tipo_material4").on("change", buscarMateriales4);
//$("#material").on("change", buscarDetalles);

function buscarMateriales(){
	
	$tipo = $("#tipo_material1").val();
	
	if($tipo === ""){
			$("#material1").html("<option value=''>Seleccione Material</option>");
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
				$("#material1").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
	}
        
}   
function buscarMateriales2(){
	
	$tipo = $("#tipo_material2").val();
	
	if($tipo === ""){
			$("#material2").html("<option value=''>Seleccione Material</option>");
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
				$("#material2").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
	}
        
}  
function buscarMateriales3(){
	
	$tipo = $("#tipo_material3").val();
	
	if($tipo === ""){
			$("#material3").html("<option value=''>Seleccione Material</option>");
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
				$("#material3").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
	}
        
}  
function buscarMateriales4(){
	
	$tipo = $("#tipo_material4").val();
	
	if($tipo === ""){
			$("#material4").html("<option value=''>Seleccione Material</option>");
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
				$("#material4").html(respuesta.html);
			},
			error:	function(xhr,err){ 
				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
			}
		});
	}
        
}  
</script>


