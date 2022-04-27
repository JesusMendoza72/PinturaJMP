 <?php
	require ("lib/mod004_presentacion.php");
	
    if ( isset( $_POST[ "NombreArticulo" ], $_POST[ "PrecioVenta" ] ) ) {
        $NombreArticulo   = $_POST[ "NombreArticulo" ];
        $PrecioVenta      = $_POST[ "PrecioVenta" ];
        $tipoiva          = $_POST[ "tipoiva" ];
        $grupo            = $_POST[ "grupo" ];
        
        $msgInsert = mod004_insDataArticulo( $NombreArticulo, $PrecioVenta, $tipoiva, $grupo );
    } else {
        $msgInsert = "<p>Alguien está modificando el HTML.</p>";

    }
	
    $divCabecera  = mod004_Cabecera();
    $divPiePag    = mod004_PiePag();
   
	require ("vista/vista_ArticuloInsert.php");
?>

