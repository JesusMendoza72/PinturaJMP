 <?php
    session_start();
	require ("lib/mod004_presentacion.php");
	
	/* llamadas a las funciones de presentación-modelo para recuperar los datos que serán mostrados en la página. */
	$divCabecera  = mod004_Cabecera();
	$divContenido = mod004_Contenido();
	$divPiePag    = mod004_PiePag();
	
	require ("vista/vista_Main.php");
?>

