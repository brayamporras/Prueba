<?php require "layout/header.php" ?>



<table class="table table-striped" style="width:70vw; margin: 0 auto;">
	<tr>
		<td>Nombre</td>
		<td>Email</td>
		<td>Sexo</td>
		<td>Área</td>
		<td>Boletín</td>
		<td>Modificar</td>
		<td>Eliminar</td>
	</tr>
	    <?php 
		if(!empty($dato)){
	    foreach ($dato as $key => $value){
	        foreach ($value as $va ):
		?>
		<tr>
			<td><?php echo $va['nombre']; ?></td>
			<td><?php echo $va['email']; ?></td>
			<td><?php echo $va['sexo']; ?></td>
			<td><?php echo $va['area_id']; ?></td>
			<td><?php echo $va['boletin']; ?></td>
			<td><a href="index.php?m=editar&id=<?php echo $va['id']; ?>">Modificar</a></td>
			<td><a href="index.php?m=eliminar&id=<?php echo $va['id']; ?>">Eliminar</a></td>
		</tr>
	     <?php   endforeach; }}else{ ?>
			<td>No hay registros en la tabla solicitada</td>
		<?php } ?>
</table>
<?php require "layout/footer.php" ?>