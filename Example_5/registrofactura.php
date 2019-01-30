<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro Factura</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />


</head>
<body>

	<?php include 'menu.php'; ?>
   
	<div class="container">

		<nav class="breadcrumb mt-1">
			<a class="breadcrumb-item" href="#">Inicio</a>
			<span class="breadcrumb-item active">Registro de Facturas</span>
		</nav>

		<h5 class="titleh5">Registro Factura</h5>

		<h5 class="titleh5 mt-4">Aportar los datos de la Factura</h5>


		<form id="register-form">
			<h5>Texto Explicativo (Máximo 120 caracteres)</h5>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label for="explicativo">Texto Explicativo (Máximo 120 caracteres)</label>
					<textarea class="form-control" id="explicativo" name="explicativo" rows="3"></textarea>
				</div>					
				</div>
			</div>
			<h5>Datos de la factura</h5>
			<div class="row">
				<div class="col-md-12">
					<p>La factura se imputará al ejercicio contable indicado por la fecha de expedición</p>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="form-group col-md-3">
							<label for="exp">Expedición*</label>
							<input type="text" class="form-control" id="exp" name="exp" />
							<span class="help-block" id="error"></span>
						</div>
						<div class="form-group col-md-3">
							<label for="serie">Serie</label>
							<input type="text" class="form-control" id="serie" name="serie" />
							<span class="help-block" id="error"></span>
						</div>
						<div class="form-group col-md-3">
							<label for="numero">Número*</label>
							<input type="text" class="form-control" id="numero" name="numero" />
							<span class="help-block" id="error"></span>
						</div>
						<div class="form-group col-md-3">
						<label for="tipo">Tipo de Factura</label>
							<select id="tipo" class="form-control" id="tipo" name="tipo">
								<option selected>Seleccionar</option>
								<option>...</option>
							</select>
						</div>
					</div>
				</div>				
			</div>
			<h5>Detalles de la Factura</h5>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="exp_ref">Expediente o Referencia de contratación</label>
					<input type="text" class="form-control" id="exp_ref" name="exp_ref" />
					<span class="help-block" id="error"></span>
				</div>
				<div class="form-group col-md-4">
					<label for="dpto">Departamenteo</label>
					<input type="text" class="form-control" id="dpto" name="dpto" />
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-4">
					<label for="contacto">Persona de Contacto</label>
					<input type="text" class="form-control" id="contacto" name="contacto" />
					<span class="help-block" id="error"></span>					
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="op_contable">Operación Contable</label>
					<input type="text" class="form-control" id="op_contable" name="op_contable" />
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-4">
					<label for="of_contable">Oficina Contable*</label>
					<select id="tipo" class="form-control" id="of_contable" name="of_contable">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-4">
					<label for="org_contable">Órgano Contable</label>
					<select id="tipo" class="form-control" id="org_contable" name="org_contable">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>
					<span class="help-block" id="error"></span>					
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
					<label for="und_tramitadora">Unidad Tramitadora</label>
					<select id="tipo" class="form-control" id="und_tramitadora" name="und_tramitadora">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-3">
					<label for="area_gestora">Área Gestora</label>
					<select id="tipo" class="form-control" id="area_gestora" name="area_gestora">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-3">
					<label for="desde">Facturación desde*</label>
					<input type="text" class="form-control" id="desde" name="desde" />
					<span class="help-block" id="error"></span>					
				</div>
				<div class="form-group col-md-3">
					<label for="hasta">Facturación hasta*</label>
					<input type="text" class="form-control" id="hasta" name="hasta" />
					<span class="help-block" id="error"></span>					
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<h6>Detalle</h6>
							<p>Es necesario indicar al menos una linea de detalle de la factura</p>
						</div>
						<div class="col-md-12">
						<table id="exampleAjax" class="table table-striped table-bordered display" style="width:100%">
						<caption>Total 0,00</caption>
							<thead  class="thead-dark">
								<tr>
									<th>Descripción del bien o servicio</th>
									<th>Cantidad</th>
									<th>Importe Unitario</th>
									<th>Total</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>
									<div class="form-group">
										<input type="text" class="form-control" id="descp_bien_servi" name="descp_bien_servi" />
										<span class="help-block" id="error"></span>					
									</div>
									</th>
									<th>
									<div class="form-group">
										<input type="text" class="form-control" id="cantidad" name="cantidad" />
										<span class="help-block" id="error"></span>					
									</div>
									</th>
									<th>
									<div class="form-group">
										<input type="text" class="form-control" id="imp_unit" name="imp_unit" />
										<span class="help-block" id="error"></span>					
									</div>
									</th>
									<th>
									
									</th>
									<th>
									<button type="button" class="btn btn-primary">Añadir</button>
									</th>
								</tr>
							</tfoot>							
						</table>	
						</div>
					</div>

				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
								<h6>I.V.A</h6>
						</div>
						<div class="col-md-12">
						<table id="table2" class="table table-striped table-bordered display" style="width:100%">
						<caption>Total I.V.A 0,00</caption>
							<thead  class="thead-dark">
								<tr>
									<th>Tipo</th>
									<th>Base</th>
									<th>Cuota</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<select id="tipo1" class="form-control" name="tipo1">
										<option selected>Seleccionar</option>
										<option>...</option>
									</select>
									<span class="help-block" id="error"></span>
								</td>
								<td>
								<div class="form-group">
									<input type="number" class="form-control" id="base1" name="base1" placeholder="0,00"/>
									<span class="help-block" id="error"></span>					
								</div>
								</td>
								<td>
									<span class="float-right">0,00</span>
								</td>
							</tr>
							<tr>
								<td>
									<select id="tipo2" class="form-control" name="tipo2">
										<option selected>Seleccionar</option>
										<option>...</option>
									</select>
									<span class="help-block" id="error"></span>
								</td>
								<td>
								<div class="form-group">
									<input type="number" class="form-control" id="base2" name="base2" placeholder="0,00"/>
									<span class="help-block" id="error"></span>				
								</div>
								</td>
								<td>
									<span class="float-right">0,00</span>
								</td>
							</tr>
							<tr>
								<td>
									<select id="tipo3" class="form-control" name="tipo3">
										<option selected>Seleccionar</option>
										<option>...</option>
									</select>
									<span class="help-block" id="error"></span>
								</td>
								<td>
								<div class="form-group">
									<input type="number" class="form-control" id="base3" name="base3" placeholder="0,00"/>
									<span class="help-block" id="error"></span>					
								</div>
								</td>
								<td>
									<span class="float-right">0,00</span>
								</td>
							</tr>																			
							</tbody>							
						</table>	
						</div>
					</div>					
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
								<h6>Descuentos de la Factura</h6>
						</div>
						<div class="col-md-12">
						<table id="table2" class="table table-striped table-bordered display" style="width:100%">
						<caption>
							El importe de "Otro descuentos" minorará el importe total de la factura. Si la factura lleva IVA el importe de éste descuento no puede imputarse como base imponible de IVA.<br>
							Total Descuentos 0,00
						</caption>
							<thead  class="thead-dark">
								<tr>
									<th>Tipo Descuento</th>
									<th>Tipo</th>
									<th>Base</th>
									<th>Cuota</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<span>I.R.P.F</span>	
								</td>
								<td>
								<div class="form-group">
									<input type="number" class="form-control" id="tipo_desc" name="tipo_desc" placeholder="0,00"/>
									<span class="help-block" id="error"></span>					
								</div>
								</td>
								<td>
								<div class="form-group">
									<input type="number" class="form-control" id="base_desc" name="base_desc" placeholder="0,00"/>
									<span class="help-block" id="error"></span>					
								</div>
								</td>
								<td>
									<span class="float-right">0,00</span>
								</td>								
							</tr>
							<tr>
								<td colspan="3">
								<div class="form-group">
									<label for="otro">Otro</label>
									<input type="text" class="form-control" id="otro" name="otro"/>
									<span class="help-block" id="error"></span>					
								</div>
								</td>
								<td>
									<span class="float-right">0,00</span>
								</td>								
							</tr>																			
							</tbody>							
						</table>	
						</div>
					</div>					
				</div>	
			</div>
			<h5>PAGO</h5>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" id="optradio" name="optradio" />Transferencia Bancaria:
									</label>
								</div>
							</div>
							<div class="col-md-6">
								<select id="tipo3" class="form-control" name="tipo3">
									<option selected>Seleccionar</option>
									<option>...</option>
								</select>
								<span class="help-block" id="error"></span>
							</div>
						</div>
					</div>						
				</div>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio">Otra forma de pago:
											<span class="help-block" id="error"></span>
									</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="otro2" name="otro2"/>
									<span class="help-block" id="error"></span>					
								</div>
							</div>
						</div>						
					</div>
				</div>			
				<div class="row text-center mb-4">
					<div class="col-md-12">
						<button type="button" class="btn btn-primary"> << Paso Anterior</button>
						<button type="submit" class="btn btn-primary ml-1 mr-1">Recalcular</button>
						<button type="button" class="btn btn-primary">Paso Siguiente >> </button>
					</div>
				</div>
				
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script src="js/validate-registrofactura.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
	<script>
	$('#exp').datepicker({
		uiLibrary: 'bootstrap4'
	});
	var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#desde').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#hasta').val();
            }
        });
        $('#hasta').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#desde').val();
            }
        });	
	</script>
</body>
</html>