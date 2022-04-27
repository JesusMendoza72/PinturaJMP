 <?php
    session_start();
	require ("lib/mod004_presentacion.php");
	
	$divCabecera  = mod004_Cabecera();

	$divPiePag    = mod004_PiePag();
	
	require ("vista/vista_Memoria.php");
?>

