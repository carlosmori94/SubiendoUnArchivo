<?php
$boton = $_POST["button"];
$nombre = $_POST["Nombre"];
$foto = $_FILES["Foto"];
var_dump($foto);
echo $boton." ".$nombre." ";

$tipoDeImagen = explode(".", $foto["name"]);
$tipoDeImagen[0] = $nombre;
	
		if(move_uploaded_file($_FILES["Foto"]["tmp_name"] , "IMG/".$tipoDeImagen[0].".".$tipoDeImagen[1]))
		{
			echo "ok";
		}
    					
?>