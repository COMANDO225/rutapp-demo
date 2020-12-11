<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
?>

<!DOCTYPE html>
<html lang="es" style="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.ico" />
	<title>RutApp - Registro</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/passenger.css">
</head>

<body style="background-image: linear-gradient(to bottom, #ffffff 0%, #d7e1ec 94%) !important;" >
	<header class="none">
		<a href="index.php" class="logo"><img src="images/rutapp.png" alt="" /> Rut<span>APP</span></a>
		<div class="toggle" onclick="toggleMenu();"></div>
		<ul class="lista">
			<li>
				<h1 href="">TE</h1>
			</li>
			<li>
				<h1 href="">EXTRAÑO uu,</h1>
			</li>
			<li>
				<h1 href="">NO TE</h1>
			</li>
			<li>
				<h1 href="">VAYAS :( </h1>
			</li>
			<br>
			<li><a href="index.php">IRSE</a></li>
		</ul>
	</header>
	<section class="contenedor">
		<input type="radio" name="timeline" class="profile" id="">
		<input type="radio" name="timeline" class="settings" id="">
		<input type="radio" name="timeline" class="post" checked id="">
		<input type="radio" name="timeline" class="books" id="">
		<div class="head">
			<ul class="nav">
				<li class="st st1 active">
					<h2 class="inner">Horario de Viaje</h2>
				</li>
				<li class="st st2 active">
					<h2 class="inner">Asignación</h2>
				</li>
				<li class="st st3 active">
					<h2 class="inner">Datos del Pasajero</h2>
				</li>
				<li class="st st4">
					<h2 class="inner">Pago</h2>
				</li>
			</ul>
			<div class="line">
				<span></span>
			</div>
		</div>
		<section class="seccion profile-section">

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>ATENCIÓN, COMANDO!!</strong> Revise la información de su pasajero. No puede cambiar su reserva
				una vez que proceda.
			</div>

			<div class="titulo-seccion">
				<h2><span>Registro </span>de Pasajero</h2>
			</div>

			<form class="form-horizontal" role="form" id="form-pass">
				<div class="content-forms">
					<div class="form-group">
						<label for="">Reservado Por</label>
						<input type="text" class="" id="book-by" placeholder="Nombre completo" autofocus=""
							required="" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="">Numero de Contacto</label>
						<input type="text" maxlength="9" class="" id="cont" placeholder="Celular" required=""
							autocomplete="off">
					</div>

					<div class="form-group">
						<label for="">Dirección</label>
						<input type="text" class="" id="address" placeholder="Ubicación de domicilio"
							required="" autocomplete="off">
					</div>
				</div>
				<br />
				<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Registro (<?= $count; ?>)</h3>
					</div>
					<div class="panel-body">
						<div class="container-fluid">
							<div class="form-group">
								<label for="">Nombre Completo (<?= $count; ?>):</label>
								<input type="text" class="" id="fN<?php echo $i; ?>"
									placeholder="Nombre y Apellidos" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="">DNI: (<?= $count; ?>):</label>
								<input type="text" class="" maxlength="8" id="dni<?php echo $i; ?>"
									placeholder="Documento de Identidad" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="">Edad: (<?= $count; ?>):</label>
								<input type="number" min="0" max="80" maxlength="2" class="" id="age<?php echo $i; ?>"
									placeholder="Ingresar Edad" required autocomplete="off">
							</div>

							<div class="form-group">
								<label for="">Sexo: (<?= $count; ?>):</label>
								<select class="btn btn-default" id="gender<?php echo $i; ?>">
									<option value="Male">Masculino</option>
									<option value="Female">Femenino</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<?php
					$count++;
					 	}//end for
					 ?>
				<div class="form-group">
                    <button type="submit" class="ripple"> SIGUIENTE </button>
                </div>
			</form>



		</section>
	</section>

	<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		window.addEventListener("scroll", function () {
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		});

		function toggleMenu() {
			var menuToggle = document.querySelector('.toggle');
			var lista = document.querySelector('.lista');
			menuToggle.classList.toggle('active');
			lista.classList.toggle('active');
		}
	</script>

	<script type="text/javascript">
		$(document).on('submit', '#form-pass', function (event) {
			event.preventDefault();
			/* Act on the event */
			var bookBy = $('#book-by').val();
			var cont = $('#cont').val();
			var address = $('#address').val();

			var counter = <?= $i; ?>;
			for (var i = 0; i < counter; i++) {
				var fN = $('#fN' + i).val();
				var dni = $('#dni' + i).val();
				var age = $('#age' + i).val();
				var gender = $('#gender' + i).val();
				$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy: bookBy,
						cont: cont,
						address: address,
						fN: fN,
						dni: dni,
						age: age,
						gender: gender
					},
					success: function (data) {
						// console.log(data);
						if (data.valid == true) {
							window.location = data.url;
						}
					},
					error: function () {
						// alert('Error: L192+');
					}
				});
			}//end for
			alert('Su destino lo espera pronto, felicidades !');
		});

	</script>


</body>

</html>

<?php
}else{
	echo '<strong>';
	echo 'Pagina no Encontrada, asi como no encuentro el amor de ella :(';
	echo '</strong>';
}//end if else isset

 ?>