
<head>

	<!--ALERTAS DE ALERTIFY JS -->
	<link rel="stylesheet" href="css/alertify.min.css" />

	<link rel="stylesheet" href="css/themes/default.min.css" />

	<script src="alertify.min.js"></script>
	<!--////////////////////// -->

	<link rel="shortcut icon" href="img/favicon.ico"  type="image/x-icon">
	<title>Quiero Ser ME</title>

	<?php  require 'conexion.php'; include 'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>
	
	<div class="jumbotron">
		<div class="">
		<h3>Contacto:</h3><br>

			<form action="" method="POST">
				<div class="form-group">
		    		<label for="">Nombre(s):</label>
		   		 	<input type="text" name="Nombres" placeholder="Nombre" class="form-control" required />
		  		</div>
					
				<div class="form-group">
		    		<label for="">Apellido(s):</label>
		   		 	<input type="text" name="Apellidos" placeholder="Apellido" class="form-control" required />
		  		</div>

				<div class="form-group">
		    		<label for="tip">Tipo Identificación:</label>
					<select class="form-control" id="tip" name="Tipoidentificacion">				
						
						<?php  {
							echo '
								<option value="-" >-Seleccione una opción-</option>
								<option value="Cedula" >Cedula</option>
								<option value="Cedula extranjeria" >Cedula extranjeria</option>
								<option value="Pasaporte" >Pasaporte</option>
								<option value="Tarjeta Identidad" >Tarjeta Identidad</option>
								<option value="Desconocido" >Desconocido</option>
								<option value="NIT" >NIT</option>
							';
						} ?>
						
					</select>
		  		</div>

		  		<div class="form-group">
		    		<label for="">Documento:</label>
		   		 	<input type="number" name="Documento" class="form-control"  placeholder="Cédula" autocomplete="off" required />
		  		</div>

		  		<div class="form-group">
		    		<label for="">Email:</label>
		   		 	<input type="text" name="email" placeholder="Email" class="form-control"  />
		  		</div>

		  		<div class="form-group">
		    		<label for="tip">Autorizo Envío E-m@il:</label>
					<select class="form-control" id="tip" name="autorizaenvioemail">
						<?php  {
							echo '
								<option value="Seleccione" >-Seleccioneuna opción-</option>
								<option value="Si" >Si</option>
								<option value="No" >No</option>

							';
						} ?>
						
					</select>
		  		</div>

		  		<div class="form-group">
		    		<label for="">Teléfono Fijo:</label>
		   		 	<input type="number" name="telefonofijo" class="form-control"  placeholder="Numero Telefonico" autocomplete="off" required />
		  		</div>
				
				<div class="form-group">
		    		<label for="">Celular:</label>
		   		 	<input type="number" name="celular" class="form-control"  placeholder="Numero Celular" autocomplete="off"  />
		  		</div>
				
				<div class="form-group">
		    		<label for="">Direccion:</label>
		   		 	<input type="text" name="direccion" placeholder="Direccion" class="form-control" required />
		  		</div>
					
				<div class="form-group">
		    		<label for="">Cuál es el motivo de su contacto?</label>
		   		 	<textarea name="contacto" class="form-control" required rows="3"></textarea> 
		  		</div>


				<input type="submit" name="guar_us" value="Guardar" class="btn btn-primary" >
				<a href="">Volver</a>

			</form>
		</div>
	</div>
		
</body>

		<?php 


			if (isset($_POST['guar_us'])) {
				


				$Nombres = $_POST['Nombres'];
				$Apellidos = $_POST['Apellidos'];
				
				$Tipoidentificacion = $_POST['Tipoidentificacion'];
				$Documento = $_POST['Documento'];
				$email= $_POST['email'];
				$autorizaenvioemail = $_POST['autorizaenvioemail'];
				$telefonofijo = $_POST['telefonofijo'];
				$celular = $_POST['celular'];
				$direccion = $_POST['direccion'];
				$contacto = $_POST['contacto'];

				//$crea = $_SESSION['Id_us'];


				$sq = "SELECT * FROM tx_contactenos WHERE documento = '$Documento'; ";
				$rep = $conex -> query($sq);

				if ($rep->num_rows > 0) {

					echo '<script language="javascript">alertify.alert("ERROR !"," Este Usuario Ya Existe !!");</script>';
				}
				else{

					$sql = "INSERT INTO tx_contactenos(Nombres,Apellidos,Tipoidentificacion,Documento,email,autorizaenvioemail,telefonofijo,celular,direccion,contacto) 
					VALUES ('$Nombres','$Apellidos','$Tipoidentificacion','$Documento','$email','$autorizaenvioemail','$telefonofijo','$celular','$direccion','$contacto');";

					if ($conex->query($sql) == TRUE) {
			        	echo '<script language="javascript">alertify.alert("MUY BIEN"," Registrado con Exito !!");</script>';


			        } else {		            
			        	echo '<script language="javascript">alertify.alert("ERROR !"," No se guardó !!");</script>';
			        }
		        }

			}

		 ?>
		          
	</div>