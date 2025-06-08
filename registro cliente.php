<?php
<form action="new 2.php" method="POST">

	<label for="caja1">Documento del acudiente:</label>
    <input type="text" name="caja1" value="" required>

	<label for="caja2">Nombre del acudiente:</label>
    <input type="text" name="caja2" value="" required>
	
	<label for="caja3">Documento del estudiante:</label>
    <input type="text" name="caja3" value="" required>
	
	<label for="caja4">Tipo de documento del acudiente:</label>
    <input type="radio" name="caja4" value="CC">CC<input type="radio" name="caja4" value="cedula extrangera">cedula extrangera
	
	<label for="caja5">Ocupacion del acudiente:</label>
    <input type="text" name="caja5" value="" required>
	
	<label for="caja6">Telefono del acudiente:</label>
    <input type="text" name="caja6" value="" required>
	
	<label for="caja7">Direccion del acudiente:</label>
    <input type="text" name="caja7" value="" required>
	
	<label for="caja8">Parentesco:</label>
    <input type="radio" name="caja8" value="Padre">padre<input type="radio" name="caja8" value="madre">madre<input type="radio" name="caja8" value="otro">otro
	
	<label for="caja9">Barrio del acudiente:</label>
    <input type="text" name="caja9" value="" required>

<button type="submit">Ingresar</button>
<button type="reset">Limpiar</button>

</form>

?>