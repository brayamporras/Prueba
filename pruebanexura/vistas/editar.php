<?php require "layout/header.php" ?>
<h1>NUEVO</h1>
<hr>
<form action="" class="form" method="get" id="">
<?php
		foreach($dato as $datakey => $datavalue){
			foreach($datavalue as $dv){

		
	?>
	<span class="titulo">Crear empleado</span>
	<div>
		<label class="label" for="nombre">Nombre completo</label>
		<input value="<?php echo $dv['nombre'];?>" class="input-text" type="text" name="nombre" id="nombre" placeholder="Nombre completo del empleado" >
	</div>
	<div>
		<label class="label" for="email">Correo electrónico</label>
		<input value="<?php echo $dv['email']; ?>" class="input-text" type="text" name="email" id="email" placeholder="Correo electrónico" > 
	</div>
	<div>
		<p class="label">Sexo</p>
		<div class="div-radio">
			
			<div class="div-radio-elements">
				<label class="valores-radio" for="masculino">Masculino</label>
				<input class="radio" type="radio" name="sexo" id="masculino" value="M" selected <?php if($dv['sexo']=="M"){echo "checked";} ?>>
			</div>
			<div class="div-radio-elements">
				<label class="valores-radio"  for="femenino">Femenino</label>
				<input class="radio" type="radio" name="sexo" id="femenino"value="F" <?php if($dv['sexo']=="F"){echo "checked";} ?> >
			</div>			
		</div>
	</div>
	<div>
	<label class="label" for="area_id">Area</label>
	<select class="input-text" name="area_id" id="area_id" name="area_id">    

		<?php foreach ($areas as $key => $value){
	        foreach ($value as $va ):
				if($dv['area_id']==$va['id']){
		?>?>

			<option selected id="" value="<?php echo $va['id']; ?>"><?php echo $va['nombre']; ?></option>
			
			<?php } else{ ?>
				<option id="" value="<?php echo $va['id']; ?>"><?php echo $va['nombre']; ?></option>
			<?php } endforeach;} ?>
	</select>
	</div>
	<div>
		<label class="label" for="description" placeholder="Descripción de la experiencia del empleado">Descripción</label>
		<textarea class="text-area" name="descripcion" id="description" ><?php echo $dv['descripcion']; ?></textarea>
	</div>
	<div>
	<p class="label">Boletín</p>
		<div class="div-check">
			<div>
				
				<input class="input-check" type="checkbox" id="roles_check1" value="1" name="boletin" <?php if($dv['boletin']==1){ echo "checked";} ?> > 
				<label class="valores-check" for="roles_check1">Deseo recibir boletín informativo</label>
			</div>
		</div>
	</div>
	<?php 	} 
		} ?>
	<input type="submit" value="Actualizar" class="botoncito" id="btn">
	<input type="hidden" value="actualizar" name="m">
	<input type="hidden" value="<?php echo $dv['id']; ?>" name="id">
</form>
<?php require "layout/footer.php" ?>