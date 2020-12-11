<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['tracker'])){
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/logo.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RutApp - Recibo</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/payment.css" />


</head>

<body style="background-color: lightblue;">
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
		<input type="radio" name="timeline" class="post" id="">
		<input type="radio" name="timeline" class="books" checked id="">
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
				<li class="st st4 active">
					<h2 class="inner">Pago</h2>
				</li>
			</ul>
			<div class="line">
				<span></span>
			</div>
		</div>
	</section>
	<div id="seleccion">
		<div class="contenedor-factura">
			<div class="container-fluid">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="titulo-factura">
								INFORMACIÓN DE PAGO
							</h2>
							<br />
							<div class="cuadro1 panel panel-success ">
								<div class="panel-heading">
									<h3 class="panel-title">COMPROBANTE</h3>
								</div>
								<div class="panel-body">
									<div class="marca">
										<h1>Rut<span>APP</span></h1>
									</div>
									<strong>
										<h3 class="banner"> "Siempre estoy aqui para tí"</h3>
										<h3 class="webadas"> No lo olvides :v</h3>
										<h3 class="destino">
											<?php require_once('data/depart_from_to.php'); 
			 				echo $origin['origin_desc'];
			 			?>
											-
											<?= $dest['dest_destination']; ?>
										</h3>
										<p>Fecha de salida: <?= $_SESSION['departure_date']; ?>, 9:00AM</p>
									</strong>
									<i>En caso de no llegar a la hora estimada, se reprogramara al día siguiente a las
										3:00 pm.</i><br />
									<i>Servicio contratado: </i>
									<strong>
										<?php require_once('data/get_accomodation.php'); 
			 					echo $accomodation['acc_type'];
			 				?>
									</strong>
								</div>
							</div>

							<div class="cuadro2 panel panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">INFORMACIÓN DEL VIAJE</h3>
								</div>
								<div class="panel-body">
									<?php require_once('data/getBooked.php'); ?>
									<strong>Reservado por:</strong> <?= ucwords($bookByInfo['book_by']);  ?><br />
									<strong>Contacto:</strong> <?= $bookByInfo['book_contact']; ?><br />
									<strong>Dirección:</strong> <?= $bookByInfo['book_address']; ?><br />
								</div>
							</div>
							<div class="container-fluid">
								<strong>
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									A BORDO!</strong>
								<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0"
									width="100%">
									<thead>
										<tr>
											<th>
												<center>
													Nombre Completo
												</center>
											</th>
											<th>
												<center>
													Edad
												</center>
											</th>
											<th>
												<center>
													Sexo
												</center>
											</th>
											<th>
												<center>
													Precio
												</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
						    	require_once('data/getBooked.php');
						    	$totalPayment = 0;
						    	$tracker = '';
						     foreach($bookPass as $bp): 
						    	$name = $bp['book_name'];
						    	$name = ucwords($name);
						    	$price = $bp['acc_price'];
						    	$totalPayment += $price;
						    	$tracker = $bp['book_tracker'];
						    ?>
										<tr align="center">
											<td><?= $name; ?></td>
											<td><?= $bp['book_age']; ?></td>
											<td><?= $bp['book_gender']; ?></td>
											<td><?= $price; ?></td>
										</tr>
										<?php endforeach; ?>
										<tr>
											<td></td>
											<td></td>
											<td align="right"><strong style="color: red">TOTAL:</strong></td>
											<td align="center"><strong><?= $totalPayment; ?></strong></td>
										</tr>
									</tbody>
									<strong>- Nro de Registro: <?= $tracker; ?></strong>
								</table>
								<center>
									<button class="imprimir btn btn-success" type="button"
										onclick="javascript:window.print()">Imprimir</button>
									<a href="index.php" class="btn btn-success">Regresar a RutApp</a>
								</center>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
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



</body>

</html>

<?php
}else{
	echo '<strong>';
	echo 'Pagina no Encontrada, asi como no encuentro el amor de ella :(';
	echo '</strong>';
}//end if else isset

 ?>