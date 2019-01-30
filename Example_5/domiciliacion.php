<!DOCTYPE html>
<html lang="en">
<head>
	<title>Domiciliación</title>
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
			<span class="breadcrumb-item active">Domiciliación</span>
		</nav>

        <h5 class="titleh5">Domiciliación Bancaria</h5>
        <form>
        <div class="row mt-3">
                <div class="form-group col-md-6">
                    <label for="inputState">Persona:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Seleccionar</option>
                        <option>0000001-Rafael Alvare-Ossorio Martin</option>
                        <option>...</option>
                    </select>
                        <span class="help-block" id="error"></span>                    
                </div>
                <div class="inputSelect form-group col-md-6">
                        <button type="submit" class="btn btn-primary">Seleccionar</button>
                </div>                
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <label class="label-sub-title">Documento: <span class="span-sub-title">0000001</span> </label>
                </div>
                <div class="col-md-12">
                    <label class="label-sub-title">Nombre/Razón Social: <span class="span-sub-title">Rafael Alvare-Ossorio Martin</span> </label>
                </div>
                <div class="col-md-12">
                    <label class="label-sub-title">Dirección: <span class="span-sub-title">C/ Pepito Perez nº 9</span> </label>
                </div>  
            </div>
        <h5 class="titleh5 mt-4">Expediente y Valores Seleccionados</h5>
            <div class="row mt-4 check-notify">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1 border">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                            </div>                        
                        </div>
                        <div class="col-md-11 border">
                            <span>VEH.638021-VEHICULOS DE TRACCION MECANICA-A.MATRICULA-1156-FPB-CCC/SEPA:</span>
                        </div>             
                        <small>Esta opcion está activa cuando todos los expedientes y valores seleccionados están domiciliados</small>       
                    </div>
                </div>             
            </div>    
        <h5 class="titleh5 mt-4">Nueva Domiciliación</h5>
            <div class="row">
				<div class="form-group col-md-12">
					<label for="cuenta_bank">Cuenta Bancaria</label>
					<select id="tipo" class="form-control" id="cuenta_bank" name="cuenta_bank">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>					
				</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Titular</p>
                </div>
				<div class="form-group col-md-4">
					<label for="doc">Documento</label>
					<input type="text" class="form-control" id="doc" name="doc" disabled />					
				</div>
				<div class="form-group col-md-8">
					<label for="nombre_titular">Nombre</label>
					<input type="text" class="form-control" id="nombre_titular" name="nombre_titular" disabled />					
				</div>                                
            </div> 
            <div class="row">
                <div class="form-group col-md-2">
					<label for="bank">Banco</label>
					<input type="text" class="form-control" id="bank" name="bank" disabled />					
				</div>
                <div class="form-group col-md-2">
					<label for="suc">Sucursal</label>
					<input type="text" class="form-control" id="suc" name="suc" disabled />					
				</div>
                <div class="form-group col-md-2">
					<label for="dc">DC</label>
					<input type="text" class="form-control" id="dc" name="dc" disabled />					
				</div>
                <div class="form-group col-md-6">
					<label for="cuenta">Cuenta</label>
					<input type="text" class="form-control" id="cuenta" name="cuenta" disabled />					
				</div>                                                
            </div>
            <div class="row">
                <div class="form-group col-md-12">
					<label for="bic">BIC</label>
					<select id="tipo" class="form-control" id="bic" name="bic">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>					
				</div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
					<label for="iban">IBAN</label>
					<select id="tipo" class="form-control" id="iban" name="iban">
						<option selected>Seleccionar</option>
						<option>...</option>
					</select>					
				</div>
            </div>
            <div class="row text-center mb-4">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
            </div>                              
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="js/validate-domiciliacion.js" type="text/javascript"></script>
	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

</body>
</html>