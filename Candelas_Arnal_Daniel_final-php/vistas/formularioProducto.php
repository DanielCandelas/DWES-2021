<?php
	
	echo "<h1>Consulta en nuestra Base de Datos</h1>";
	echo "<form action='' method='post' >";
	echo "Nombre del campo:".listarCampos($base->link, 'http://localhost/DWES-2021/Candelas_Arnal_Daniel_final/producto/producto/campos')."<br>";
	echo "Valor del campo: <input type='text' name='valor'><br>";
	echo "<input type='submit' name='enviar'> <br> </form>";

	