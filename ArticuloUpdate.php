 <?php
	require ("lib/mod004_presentacion.php");
	$divCabecera  = mod004_Cabecera();
    if ( isset( $_POST[ "Id" ], $_POST[ "NombreArticulo" ], $_POST[ "PrecioVenta" ], $_POST[ "tipoiva" ], $_POST[ "grupo" ] ) ) {
        $Id                   = $_POST[ "Id" ];
        $NombreArticulo       = $_POST[ "NombreArticulo" ];
        $PrecioVenta          = $_POST[ "PrecioVenta" ];
        $idtipoiva            = $_POST[ "tipoiva" ];
        $idgrupo              = $_POST[ "grupo" ];

        $msgUpdate = mod002_updDataArticulo( $Id, $NombreArticulo, $PrecioVenta, $idtipoiva, $idgrupo );
    } else {
        $msgUpdate = "<p>Alguien está modificando el HTML.</p>";
    } 
	$divPiePag    = mod004_PiePag();
   
?>

