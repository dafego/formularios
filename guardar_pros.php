<head>
	<script src="js/jquery-3.1.1.min.js"></script>
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

<div class="jumbotron" style="background: #D8D8D8;border-radius: 5px; opacity: 0.8;" >
		<h3>Quiero ser mamá empresaria:</h3>
		<form action="" method="POST">
			Documento: <input type="number" name="documento" class="form-control"  placeholder="Cédula" autocomplete="off" required /><br>
			Nombre: <input type="text" name="nombre" placeholder="Nombre" class="form-control" required /><br>
			Primer Apellido: <input type="text" name="primerapellido" placeholder="Nombre" class="form-control" required /><br>
			Segundo Apellido: <input type="text" name="segundoapellido" placeholder="Nombre" class="form-control"  /><br>
			Numero telefonico: <input type="number" name="numerotelefonico" class="form-control"  placeholder="Numero Telefonico" autocomplete="off" required /><br>
			Numero Celular: <input type="number" name="numerocelular" class="form-control"  placeholder="Numero Celular" autocomplete="off" required /><br>
			Direccion: <input type="text" name="direccion" placeholder="Direccion" class="form-control" required /><br>
			<label for="tip">Motivo Inscripción:</label>
			<select class="form-control" id="tip" name="motivoinscripcion">				
				
				<?php  {
					echo '
						<option value="--" >--</option>
						<option value="Iniciativa Propia" >Iniciativa Propia</option>
						<option value="Otros" >Otros</option>
						<option value="Pautas Radiales" >Pautas Radiales</option>
						<option value="Periodicos" >Periodicos</option>
						<option value="Television" >Television</option>		
					';
				} ?>
				
			</select> <br>
			
			<input type="submit" name="guar_us" value="Guardar" class="btn btn-primary" >
			<a href="index.php" >Volver</a>
		</form>
	</div>
</body>

		<?php 


			if (isset($_POST['guar_us'])) {
				

				$documento = $_POST['documento'];
				$nombre = $_POST['nombre'];
				
				$primerapellido = $_POST['primerapellido'];
				$segundoapellido = $_POST['segundoapellido'];
				$numerotelefonico = $_POST['numerotelefonico'];
				$numerocelular = $_POST['numerocelular'];
				$direccion = $_POST['direccion'];
				$motivoinscripcion = $_POST['motivoinscripcion'];

				//$crea = $_SESSION['Id_us'];


				$sq = "SELECT * FROM tx_prospecto WHERE documento = '$documento'; ";
				$rep = $conex -> query($sq);

				if ($rep->num_rows > 0) {

					echo '<script language="javascript">alertify.alert("ERROR !"," Este Usuario Ya Existe !!");</script>';
				}
				else{

					$sql = "INSERT INTO tx_prospecto(documento,nombre,primerapellido,segundoapellido,numerotelefonico,numerocelular,direccion,motivoinscripcion) 
					VALUES ('$documento','$nombre','$primerapellido','$segundoapellido','$numerotelefonico','$numerocelular','$direccion','$motivoinscripcion');";

					if ($conex->query($sql) == TRUE) {
			        	echo '<script language="javascript">alertify.alert("MUY BIEN"," Registrado con Exito !!");</script>';


			        } else {		            
			        	echo '<script language="javascript">alertify.alert("ERROR !"," No se guardó !!");</script>';
			        }
		        }

			}

		 ?>
		          
	</div>