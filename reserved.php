<?php
require_once 'data/get_origin.php';
require_once 'data/get_destination.php';

// echo '<pre>';
// print_r($origins);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="es" html style="height:100vh !important;">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RutApp - Reservar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/reservar.css" />
</head>

<body style="background-image: linear-gradient(to bottom, #ffffff 0%, #d7e1ec 94%) !important;">

    <header class="none">
        <a href="index.php" class="logo"><img src="images/rutapp.png" alt="" /> Rut<span>APP</span></a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="lista">
            <li><h1 href="">TE</h1></li>
            <li><h1 href="">EXTRAÑO uu,</h1></li>
            <li><h1 href="">NO TE</h1></li>
            <li><h1 href="">VAYAS :( </h1></li>
            <br>
            <li><a href="index.php">IRSE</a></li>
        </ul>
    </header>
    <section class="contenedor">
        <input type="radio" name="timeline" class="profile" checked id="">
        <input type="radio" name="timeline" class="settings" id="">
        <input type="radio" name="timeline" class="post" id="">
        <input type="radio" name="timeline" class="books" id="">
        <div class="head">
            <ul class="nav">
                <li class="st st1 active">
                    <h2 class="inner">Horario de Viaje</h2>
                </li>
                <li class="st st2">
                    <h2 id="redireccion2" class="inner">Asignación</h2>
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

        <div class="content">
            <section class="seccion profile-section">
                    <div class="titulo-seccion">
                        <h2>Hola, <span>¿A dónde nos vamos?</span></h2>
                    </div>
                    <form class="formu1" role="form" id="form-itinerary">
                        <div class="form-group">
                            <label for="">Origen </label>
                            <div class="custom-select">
                                <select class="" id="orig-id">
                                    <?php foreach ($origins as $o): ?>
                                    <option class="opciones" value="<?=$o['origin_id'];?>"><?=$o['origin_desc'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Destino </label>
                            <div class="custom-select2">
                                <select class="" id="dest-id">
                                    <?php foreach ($destinations as $d): ?>
                                    <option class="opciones" value="<?=$d['dest_id'];?>"><?=$d['dest_destination'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Fecha de salida</label>
                            <input type="date" class="date-input" id="dept-date" min="<?php echo date("Y-m-d"); ?>">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="ripple"> BUSCAR </button>
                        </div>
                    </form>
            </section>
        </div>
    </section>
               
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    
    <script src="js/select.js"></script>
    <script src="js/select2.js"></script>

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
        // document.getElementById("redireccion2").onclick = function () {
        // location.href = "accomodation.php";
        // };
    </script>

    <script type="text/javascript">
        
        $(document).on('submit', '#form-itinerary', function (event) {
            event.preventDefault();
            /* Act on the event */
            var validate = "";
            var origin = $('select[id=orig-id]').val();
            var dest = $('select[id=dest-id]').val();
            var dept = $('input[id=dept-date]').val();

        if(dept.length == 0){
			alert('Por favorsito ctm, seleccione la fecha de salida.');
		}else if(origin === dest){
			alert('Oh gilazo no puedes viajar a la misma provincia chapa tu combi nomas');
		}else {
                $.ajax({
                    url: 'data/session_itinerary.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        oid: origin,
                        did: dest,
                        dd: dept
                    },
                    success: function (data) {
                        console.log(data);
                        if (data.valid == true) {
                            window.location = data.url;
                            console.log('sss');
                        }
                    },
                    error: function () {
                        alert('Error: L161+');
                    }
                });
            }//end dept kung == 0
            
        });      
    </script>

</body>

</html>