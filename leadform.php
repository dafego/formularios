<!<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contáctenos Novaventa</title>
	<link href="https://portal-contenido-novaventa.appspot.com/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://portal-contenido-novaventa.appspot.com//css/bootstrap-formhelpers.min.css" rel="stylesheet">
	<link href="https://portal-contenido-novaventa.appspot.com//css/main.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://portal-contenido-novaventa.appspot.com//css/font-awesome.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="https://portal-contenido-novaventa.appspot.com//js/libs/jquery.validate.js"></script> 
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/firebase.js"></script>   
	<script src="https://portal-contenido-novaventa.appspot.com//js/util/validar.js"></script>    
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/libs/bootstrap-formhelpers.min.js"></script>
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/util/Util.js"></script>
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/util/Validacion.js"></script>
	<script type="text/javascript" src="https://portal-contenido-novaventa.appspot.com//js/Contacto.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico"  type="image/x-icon">
	<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#country').on('change',function(){
    			var countryID = $(this).val();
    			if(countryID){
    				$.ajax({
    					type:'POST',
    					url:'ajaxData.php',
    					data:'country_id='+countryID,
    					success:function(html){
    						$('#state').html(html);
    						$('#city').html('<option value="">Select state first</option>'); 
    					}
    				}); 
    			}else{
    				$('#state').html('<option value="">Select country first</option>');
    				$('#city').html('<option value="">Select state first</option>'); 
    			}
    		});

    		$('#state').on('change',function(){
    			var stateID = $(this).val();
    			if(stateID){
    				$.ajax({
    					type:'POST',
    					url:'ajaxData.php',
    					data:'state_id='+stateID,
    					success:function(html){
    						$('#city').html(html);
    					}
    				}); 
    			}else{
    				$('#city').html('<option value="">Select state first</option>'); 
    			}
    		});
    	});
    </script>
</head>

<body>
	<div class="contenedor_general">
		<div class="top-image">
			<a img <source src="images/top-image2.png" type="" media="">      	
			</div>
			<div class="global_form">
				<div class="row">
					<div id="loginingone" class="modal-loading">
						<div class="row" id="before_check">
							<h3>Cargando!</h3>
							<div class="loading"><div class="loader"></div></div>
						</div>

					</div>

					<div id="loginingtwo" class="modal-loading">

						<div class="row" id="after_check">
							<h3>Se ha contactado correctamente!</h3>
							<i class="fa fa-thumbs-up"></i>
							<a id="aceptarok" href="#" class="aceptar_check">Aceptar</a>
						</div>
					</div>



					<form class="form" action="leadform1.php" method="POST"  enctype="multipart/form-data"   >
						<div class="ubicationform">
							<h3>Cuéntanos donde vives</h3>
							<div class="select-boxes">

							<?php
								//Include database configuration file
								include('dbConfig.php');

								//Get all country data
								$query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");

								//Count total number of rows
								$rowCount = $query->num_rows;
								?>

                            <table style="width: 100%;">
                            	<tbody>
                            		<tr>
                            			<td>
                            				<select name="country" id="country" class="form-control">
									                <option value="">Departamento</option>
									                <?php
									                if($rowCount > 0){
									                while($row = $query->fetch_assoc()){ 
									                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
								                        }
							                        }else{
							                        echo '<option value="">Depatamento no existe</option>';
						                        }
						                        ?>
					                        </select>
                            			</td>

                            			<td>
                            				<select name="state" id="state" class="form-control c">
						                        <option value="">seleccione departamento primero</option>
					                        </select>
                            			</td>

                            			<td>
                            				<select name="city" id="city" class="form-control ">
						                        <option value="">Seleccione municipio primero</option>
					                        </select>
                            			</td>

                            		</tr>
                            	</tbody>
                            </table>					
				</div>
			</div>


	
			<div class="actionbuttons">
				<input type="hidden" name="departamentoval" id="departamentoval" >
				<!--<div id="enviar" class="btn bttn-fill bttn-md bttn-primary">Enviar</div>-->
				<input type="submit" class="btn btn-primary btn-block" value="Enviar" name="edit_ent" >

			</div>
			<input id="tipo_formulario" name="description[tipo_formulario]" value="clientes" type="hidden"> 
			<input id="redirect_url" name="redirect_url" type="hidden" value="http://www.novaventa.com.co"> 									
			<input id="sociedad" name="description[sociedad]" value="AGNO" type="hidden"> 
			<input id="modified_user_id" name="fields[modified_user_id]" style="display:none" type="hidden" value="1">
			<input id="created_by" name="fields[created_by]" style="display:none" type="hidden" value="1">
			<input id="assigned_user_id" name="fields[assigned_user_id]" style="display:none" type="hidden" value="1">
			<input id="sasa_relacion_c" name="fields[sasa_relacion_c]" type="hidden" value="8">
			<input id="account_id" name="fields[account_id]" type="hidden">
			<input id="contact_id" name="fields[contact_id]" type="hidden">
			<input id="team_id" name="fields[team_id]" type="hidden" type="hidden" value="75fac92a-8588-11e6-8a13-060b37ffb723">	
			<input id="status" name="fields[status]" type="hidden" type="hidden" value="New">	
			<input id="sasa_tificacion_casos_cases_1sasa_tificacion_casos_ida" name="fields[sasa_tificacion_casos_cases_1sasa_tificacion_casos_ida]" type="hidden" type="hidden" value="0b59b2fc-8a88-11e6-8d46-06b20b8677ed">			
			<input id="sasa_fuente_c" name="fields[sasa_fuente_c]" type="hidden" type="hidden" value="9">
		</form>

	</div>
	<div class="pie">

	</div>
</div>   	
</div>





</body>
</html>