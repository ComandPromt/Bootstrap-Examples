<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cambiar Domicilio</title>
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
			<span class="breadcrumb-item active">Cambiar Domicilio</span>
		</nav>

        <h5 class="titleh5">Cambiar Domicilio</h5>
        <div class="row">
            <div class="col-md-12">
                <h6>Desde esta pantalla usted podrá solicitar un cambio de domicilio para usted u otros miembros de su hoja padronal</h6>
            </div>
            <div class="col-md-12">
                <p>El proceso consta de varios pasos:</p>
                <ul>
                    <li>Seleccionar los habitantes para cambiar de domicilio</li>
                    <li>Indicar el domicilio de destino</li>
                    <li>Confirmar la solicitud</li>
                    <li>Aportar la documentación necesaria en la entidad para confirmarla operación</li>
                </ul>
                <p>El cambio de domicilio requiere un acto dpresencial donde deberá aportar los documentos que se consideren necesarios</p>
            </div>
        </div>
        <h6>1. Seleccione los miembros de su hoja padronal para los que desea solicitar un cambio de domicilio</h6>
        <div class="row">
            <div class="col-md-12 form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Rafael Alvarez-Ossorio Martin
                </label>
            </div>
            <div class="col-md-12 form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Nombre Apellido1 Apellido2
                </label>
            </div>            
        </div>
        <h6>2. A continuación debe indicar el domiclio de destino de los habitantes </h6>
        <div class="row">
                <div class="col-md-2">
                    <span>Tipos de Vías: </span>
                </div>
                <div class="form-group col-md-4">
                    <select name="tipo" id="tipo" class="form-control">
                            <option selected>Seleccionar</option>
                            <option>Calle</option>
                            <option>...</option>
                    </select>
                    <span class="help-block" id="error"></span>
                </div>
                <div class="col-md-2">
                    <span>Descripción Vías: </span>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="descpVia" class="form-control" id="descpVia">
                    <span class="help-block" id="error"></span>                   
                </div>
                <div class="form-group col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Buscar Vía</button>
                </div>                
            </div>
            <div class="row">

                <div class="col-md-1">
                    <span>Nº: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="numero" class="form-control" id="numero">
                    <span class="help-block" id="error"></span>
                </div>
                <div class="col-md-1">
                    <span>Letra: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="letra" class="form-control" id="letra">
                    <span class="help-block" id="error"></span>
                </div>                        

                <div class="col-md-1">
                    <span>Bloque: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="bloque" class="form-control" id="bloque">
                    <span class="help-block" id="error"></span>
                </div>
                <div class="col-md-1">
                    <span>Portal: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="portal" class="form-control" id="portal">
                    <span class="help-block" id="error"></span>
                </div>                                                
            </div>  
            <div class="row">
                <div class="col-md-1">
                    <span>Escalera: </span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="escalera" class="form-control" id="escalera">
                    <span class="help-block" id="error"></span>
                </div>
                <div class="col-md-1">
                    <span>Planta: </span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="planta" class="form-control" id="planta">
                    <span class="help-block" id="error"></span>
                </div>                        

                <div class="col-md-1">
                    <span>Puerta: </span>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="puerta" class="form-control" id="puerta">
                    <span class="help-block" id="error"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <span>Kilometro: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="km" class="form-control" id="km">
                    <span class="help-block" id="error"></span>
                </div>
                <div class="col-md-1">
                    <span>Hectómetro: </span>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="hct" class="form-control" id="hct">
                    <span class="help-block" id="error"></span>
                </div>                        

                <div class="col-md-2">
                    <span>Codigo Postal: </span>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="cp" class="form-control" id="cp">
                    <span class="help-block" id="error"></span>
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
    <script src="js/validate-cambiardomicilio.js" type="text/javascript"></script>
	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

</body>
</html>