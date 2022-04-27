 <?php
    session_start();
	require ("lib/mod004_presentacion.php");
	
	$divCabecera  = mod004_Cabecera();
	$layerCompras = mod004_getAllCompras();
	$divPiePag    = mod004_PiePag();
	
	require ("vista/vista_Compras.php");
?>

