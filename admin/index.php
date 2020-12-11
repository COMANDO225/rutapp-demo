<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema Admin</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
	</head>

	<div class="loginbox">
    <img src="../images/Logo.png" class="avatar">
        <h1>Durazno Admin</h1>
        <form id="form-login" method="post"  action="login.php" class="well" >
            <p>Usuario</p>
            <input type="text" id="un" name="email" placeholder="Ingrese su Email" required>
            <p>Contraseña</p>
            <input type="password" id="pwd" name="password" placeholder="Contraseña" required>
            
            <!--<input type="submit" name="" value="Login">-->
            <button type="submit"  class="btn btn-primary btn-block" name="login">Acceder</button>
        </form>
    </div>


<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-login', function(event) {
		event.preventDefault();
		/* Act on the event */
		// console.log('test');
		var un = $('#un').val();
		var pwd = $('#pwd').val();

		$.ajax({
				url: '../data/login.php',
				type: 'post',
				dataType: 'json',
					data: {
						un: un,
						pwd : pwd
					},
				success: function (data) {
					// console.log(data);
					if(data.valid == true){
						window.location = data.url;
					}else{
						$('#modal-message').find('#body-cont').text(data.msg);
						$('#modal-message').modal('show');
						$('#un').val("");
						$('#pwd').val("");
						$('#un').focus();
					}
				},
				error: function(){
					alert('Error: L99+');
				}//
			});
	});

</script>

</body>
</html>