 <?php
	require ("lib/mod004_presentacion.php");
	
	$divCabecera  = mod004_Cabecera();
	$divArticulos = mod004_getArticulosJQuery();
	$divPiePag    = mod004_PiePag();

	require ("vista/vista_mainJQuery.php");
?>

