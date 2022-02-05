<?php require "layout/header.php" ?>
<h1>Crear nuevo empleado</h1>
<hr>

<form action="" class="form" method="get" id="">
	<div>
		<label class="label" for="nombre">Nombre completo</label>
		<input class="input-text" type="text" name="nombre" id="nombre" placeholder="Nombre completo del empleado" >
	</div>
	<div>
		<label class="label" for="email">Correo electrónico</label>
		<input class="input-text" type="text" name="email" id="email" placeholder="Correo electrónico" > 
	</div>
	<div>
		<p class="label">Sexo</p>
		<div class="div-radio">
			<div class="div-radio-elements">
				<label class="valores-radio" for="masculino">Masculino</label>
				<input class="radio" type="radio" name="sexo" id="masculino" value="M" >
			</div>
			<div class="div-radio-elements">
				<label class="valores-radio"  for="femenino">Femenino</label>
				<input class="radio" type="radio" name="sexo" id="femenino"value="F"  >
			</div>

		</div>
	</div>
	<div>
	<label class="label" for="area_id">Area</label>
	<select class="input-text" name="area_id" id="area_id" name="area_id">    
		<option id="valornulo" value="0">Seleccione una opción</option>
		<?php foreach ($areas as $key => $value){
	        foreach ($value as $va ):
		?>?>

			<option id="" value="<?php echo $va['id']; ?>"><?php echo $va['nombre']; ?></option>
			
			<?php endforeach;} ?>
	</select>
	</div>
	<div>
		<label class="label" for="description" placeholder="Descripción de la experiencia del empleado">Descripción</label>
		<textarea class="text-area" name="descripcion" id="description" >
		</textarea>
	</div>
	<div>
	<p class="label">Boletín</p>
		<div class="div-check">
			<div>
				<input class="input-check" type="checkbox" id="roles_check1" value="1" name="boletin"  > 
				<label class="valores-check" for="roles_check1">Deseo recibir boletín informativo</label>
			</div>
		</div>
	</div>
	<input type="submit" value="Guardar" class="botoncito" id="btn">
	<input type="hidden" value="guardar" name="m">
</form>

<?php require "layout/footer.php" ?>