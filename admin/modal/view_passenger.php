<div class="modal fade" id="modal-view-pass">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Lista de pasajeros</h4>
			</div>
			<div class="modal-body">
			<center>
				<strong>Registrado Por: </strong><span id="book-by"></span> <br />
				<strong>Fecha de salida: </strong><span id="date"></span> <br />
				<strong>Contacto: </strong><span id="contact"></span> <br />
				<strong>Dirección: </strong><span id="address"></span><br />
			</center>
				<br />
				<div id="passenger-list">
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="acceptPayment();" class="btn btn-primary accept-pay">Calcular
				<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				</button>

				<button type="button" onclick="addTransaction();" class="btn btn-success accept-pay">Aceptar Pago
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				</button>
			</div>
		</div>
	</div>
</div>