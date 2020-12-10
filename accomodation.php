<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); //start session if session not start
}

if (isset($_SESSION['departure_date'])) {
	
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/logo.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RutApp - Buses</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/accomodation.css" />
</head>

<body>

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
		<input type="radio" name="timeline" class="profile"  id="">
		<input type="radio" name="timeline" class="settings" checked id="">
		<input type="radio" name="timeline" class="post" id="">
		<input type="radio" name="timeline" class="books" id="">
		<div class="head">
			<ul class="nav">
				<li class="st st1 active">
					<h2 class="inner">Horario de Viaje</h2>
				</li>
				<li class="st st2 active">
					<h2 class="inner">Asignación</h2>
				</li>
				<li class="st st3">
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
				<div class="titulo-seccion">
					<h2>Escoge <span>La caña</span></h2>
				</div>
				<div class="panel-body">
					<div class="container-fluid">
						<form class="form-horizontal" role="form" id="form-acc">
							<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0"
								width="100%">
								<thead>
									<tr>
										<th>
											Buses<span style="color: red;">*</span>
										</th>
										
										<th>
											<center>
												Asientos
											</center>
										</th>
										<th>
											<center>
												Tarifa
											</center>
										</th>
										<th class="valorizacion">
											Valorización
										</th>
									</tr>
								</thead>
								<tbody>
									<?php require_once 'data/get_all_accomodations.php';?>
									<tr>
										<td>
											<input value=" <?=$getSit['acc_id'];?>" type="radio" name="acc">
											<?=$getSit['acc_type'];?>
										</td>
										<td align="center">
											<?=$getSit['acc_slot'] - $totalSit['sit'];?>
										</td>
										<td align="center">S/. <?=$getSit['acc_price'];?></td>
										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
										</td>
									</tr>
									<tr>
										<td>
											<input value="<?=$getEcoA['acc_id'];?>" type="radio" name="acc">
											<?=$getEcoA['acc_type'];?>
										</td>
										<td align="center">
											<?=$getEcoA['acc_slot'] - $totalEcoA['ecoA'];?>
										</td>
										<td align="center">S/. <?=$getEcoA['acc_price'];?></td>

										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
										</td>
									</tr>
									<tr>
										<td>
											<input value="<?=$getEcoB['acc_id'];?>" type="radio" name="acc">
											<?=$getEcoB['acc_type'];?>
										</td>
										<td align="center">
											<?=$getEcoB['acc_slot'] - $totalEcoB['ecoB'];?>
										</td>
										<td align="center">S/. <?=$getEcoB['acc_price'];?></td>
										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
										</td>
									</tr>
									<tr>
										<td>
											<input value="<?=$getTour['acc_id'];?>" type="radio" name="acc">
											<?=$getTour['acc_type'];?>
										</td>
										<td align="center">
											<?=$getTour['acc_slot'] - $totalTour['ecoT'];?>
										</td>
										<td align="center">S/. <?=$getTour['acc_price'];?></td>
										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/></svg>
										</td>
									</tr>
									<tr>
										<td>
											<input value="<?=$getCab['acc_id'];?>" type="radio" name="acc">
											<?=$getCab['acc_type'];?>
										</td>
										<td align="center">
											<?=$getCab['acc_slot'] - $totalCab['ecoC'];?>
										</td>
										<td align="center">S/. <?=$getCab['acc_price'];?></td>
										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/></svg>
										</td>
									</tr>
									<tr>
										<td>
											<input value="<?=$getDel['acc_id'];?>" type="radio" name="acc">
											<?=$getDel['acc_type'];?>
										</td>
										<td align="center">
											<?=$getDel['acc_slot'] - $totalDel['ecoD'];?>
										</td>
										<td align="center">S/. <?=$getDel['acc_price'];?></td>
										<td class="valorizacion" align="start">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="#FFC309" xmlns="http://www.w3.org/2000/svg"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="formgroup">
								<label for="">Total # de Pasajeros <span style="color: red; font-weight: lighter; font-size: 13px">(Max 6 personas por registro)</span></label>
								<input type="number" min="1" max="6" class="form-control" name="totalPass"
									plactreholder="Total # de Pasajeros" autocomplete="off">
							</div>
							<div class="form-group">
                        		<button type="submit" class="ripple"> SIGUIENTE </button>
                        	</div>
						</form>
					</div>
				</div>
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
		$(document).on('submit', '#form-acc', function (event) {
			event.preventDefault();
			/* Act on the event */
			var acc = $('input[name="acc"]:checked').val();
			var totalPass = $('input[name="totalPass"]').val();

			if (acc == null) {
				alert('Debes seleccionar un bus');
			} else {
				// console.log(acc);
				if (totalPass.length == 0) {
					alert('Introduzca el número de pasajeros');
				} else {
					$.ajax({
						url: 'data/session_accomodation.php',
						type: 'post',
						dataType: 'json',
						data: {
							acc: acc,
							tp: totalPass
						},
						success: function (data) {
							console.log(data.slot);
							// 	window.location = "passenger.php";
							if (data.slot >= 0) {
								window.location = "passenger.php";
							} else {
								alert('Ta lleno! espera el otro año.');
							}
						},
						error: function () {
							alert('Error: L175+');
						}
					});
				}//end totalPass
			}//end acc == null
		});

	</script>

</body>

</html>


<?php
} else {
    echo '<strong>';
    echo 'Pagina no Encontrada, asi como no encuentro el amor de ella :(';
    echo '</strong>';
} //end if else isset

?>