<?php
	if(isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['th']) && isset($_POST['th2']) && isset($_POST['th3']) ){
		echo "1";
	}else{
	if(isset($_FILES['foto'])){
		$ruta_destino='fotos/';
		if(move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_destino.$_FILES['foto']['name'].'.jpg'))
			echo 1;
		else{
			echo 0;
		}
	}else{
			echo "Error 404: not found";
		}
	}
	
	
?>