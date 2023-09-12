<?php 
$titulo = "Contacto";
include "templates/header.php"; 
?>

	<main class="contenido-principal contenedor">
		<h2 class="text-center">Contacto</h2>

		<form action="#" class="formulario">
			<fieldset>
				<legend>Tus Datos</legend>

				<div class="campo">
					<label for="nombre">Nombre: </label>
					<input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" required>
				</div>
				
				<div class="campo">
					<label for="asunto">Asunto: </label>
					<input type="text" name="asunto" id="asunto" placeholder="Tu asunto">
				</div>
				
				<div class="campo">
					<label for="email">E-mail: </label>
					<input type="email" name="email" id="email" placeholder="Tu Email">
				</div>
				
				<div class="campo">
					<label for="telefono">Teléfono: </label>
					<input type="tel" name="telefono" id="telefono" placeholder="Tu Teléfono">
				</div>

				<div class="campo">
					<label for="textarea">Mensaje: </label>
					<textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
				</div>
			</fieldset>

			<fieldset>
				<legend>País</legend>

				<select name="pais" id="pais">
					<option selected disabled value="">-- Seleccione --</option>
					<option value="mx">México</option>
					<option value="pr">Perú</option>
					<option value="co">Colombia</option>
					<option value="ar">Argentina</option>
					<option value="es">España</option>
					<option value="cl">Chile</option>
				</select>
			</fieldset>
			
			<fieldset>
				<legend>Información Extra</legend>

				<div class="campo">
					<label for="cliente">Cliente</label>
					<input type="radio" name="tipo" id="cliente" value="cliente">
				</div>
				<div class="campo">
					<label for="cliente">Proveedor</label>
					<input type="radio" name="tipo" id="proveedor" value="proveedor">
				</div>
				<div class="campo">
					<label for="categoria">Categoría de interés</label>
					<input list="categorias" name="categorias">
					<datalist id="categorias">
						<option value="Cocina">
						<option value="Exterior">
						<option value="Recámaras">
						<option value="Oficina">
						<option value="Televisión">
					</datalist>
				</div>
			</fieldset>

			<input class="btn" type="submit" value="Enviar Formulario">
		</form>
	</main>
	
<?php include "templates/footer.php"; ?>