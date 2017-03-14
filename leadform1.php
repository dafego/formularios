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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
		<?php 
				$cit = $_POST['city'];
				include('dbConfig.php');

					$sql = "SELECT * FROM cities WHERE city_id='$cit' ";
					$res = $db -> query($sql);
					$row = $res-> fetch_array(MYSQLI_ASSOC);
					

					$zonas = $row['zona']; 
					$ante=  $row['ant']; 


		?>
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
					<form class="form" id="" action="https://gnutresaqas.sugarondemand.com/index.php?entryPoint=WebToLeadCapture" method="post"  >

						<input id="ant_zona_sasa_c" type="hidden" name="ant_zona_sasa_c" placeholder="ant_zona_sasa_c" class="form-control" size="165" autocomplete="off" required value="<?php echo $row['zona']; ?>"/><br>
						<input id="regio_barrios_leads_1regio_barrios_ida" type="hidden" name="regio_barrios_leads_1regio_barrios_ida" placeholder="regio_barrios_leads_1regio_barrios_ida" class="form-control" size="165" autocomplete="off" required value="<?php echo $row['ant']; ?>"/><br>


						<h3>Cuéntanos sobre ti</h3>
						<div class="userform">
							<div class="form-group col-sm-6">		    							
								<label for="NombreContacto">Nombre (s)</label>
								<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingresa tu(s) nombre(s)" required>	
							</div>
							<div class="form-group col-sm-6">		    							
								<label for="ApellidosContacto">Apellido(s)</label>
								<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingressa tus apellidos" required>	
							</div>
							<br>
							<br>
							<div class="form-group col-sm-6">
								<label for="TipoID">Tipo de Documento</label>    							
								<select class="form-control" id="sasa_tipodocumento_c" name="sasa_tipodocumento_c" required>
									<option value="">- Seleccione una opción -</option>
									<option value="13">Cédula de ciudadania</option>
									<option value="12">Tarjeta de identidad</option>
									<option value="31">NIT</option>
									<option value="22" >Cédula de extrangerísa</option>
									<option value="41">Pasaporte</option>
									<option value="00">Otros</option>						  
								</select>					
							</div>
							<div class="form-group col-sm-6">
								<label for="NumID">N&uacute;mero de documento</label>
								<input type="text" class="form-control" id="sasa_nrodocumento_c" name="description[contact_cedula]" placeholder="ingresa tu número de documento" required>			
							</div> 	
						</div>
						<br>
						<br>
						<h3>Cuéntanos donde te contactamos</h3>
						<div class="usercontactform">
							<div class="form-group col-sm-6">
								<label for="tel">Número fijo</label>
								<input type="tel" pattern="[0-9]{7}" class="form-control" id="numero_fijo" name="description[numero_fijo]" placeholder="Ingresa tu numero fijo" required>
							</div>
							<div class="form-group col-sm-6">
								<label for="otrotel">Número alternativo</label>
								<input type="tel" pattern="[0-9]{7}" class="form-control" id="numero_fijo2" name="description[numero_fijo2]" placeholder="Ingresa tu numero fijo">
							</div>	
							<div class="form-group col-sm-6">
								<label for="NumCel">N&uacute;mero celular</label>
								<input type="tel" pattern="[0-9]{10}" class="form-control" id="phone_mobile" name="phone_mobile" placeholder="Ingresa tu numero celular" required>			
							</div>
							<div class="form-group col-sm-6">
								<label for="email">Correo electr&oacute;nico</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Correo electr&oacute;nico" required>
							</div>

						</div>
						<div class="ubicationform">

		<div class="autorizacion">
			<div class="checkbox disabled">
				<label>
					<input type="checkbox" name="description[acepto terminos]" value="si" required>
					<a href="https://storage.googleapis.com/portal-contenido-novaventa.appspot.com/estaticos/politica_tratmiento_dato_personales.pdf" target="_blank">Acepto pol&iacute;tica de privacidad</a>
				</label>
			</div>
			<div class="g-recaptcha" data-sitekey="6LfBlxgUAAAAAFUCz8rT95q8yAtR6uvxU3ndcixD"></div>		
			<div class="actionbuttons">
				<input type="hidden" name="departamentoval" id="departamentoval" >
				<!--<div id="enviar" class="btn bttn-fill bttn-md bttn-primary">Enviar</div>-->
				<input type="submit" class="btn btn-primary btn-block" value="Enviar">
			</div>
			<input id="tipo_formulario" name="description[tipo_formulario]" value="clientes" type="hidden"> 
			<input id="redirect_url" name="redirect_url" type="hidden" value="http://www.novaventa.com.co"> 									
			<input id="nuts_sociedad_leads_1_name" name="nuts_sociedad_leads_1_name" value="novavd" type="hidden"> 
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