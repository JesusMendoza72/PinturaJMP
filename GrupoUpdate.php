 <?php
	require ("lib/mod004_presentacion.php");
	$divCabecera  = mod004_Cabecera();
    if ( isset( $_POST[ "IdGrupo" ], $_POST[ "NombreGrupo" ] ) ) {
        $IdGrupo           = $_POST[ "IdGrupo" ];
        $NombreGrupo       = $_POST[ "NombreGrupo" ];


        $msgUpdate = mod002_updDataGrupo( $IdGrupo, $NombreGrupo );
    } else {
        $msgUpdate = "<p>Alguien está modificando el HTML.</p>";
    } 
	$divPiePag    = mod004_PiePag();
   
?>

