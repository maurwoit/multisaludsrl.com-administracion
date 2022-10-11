<?php

    include  ("db_connection.php");
    
    $dbname='xvebnjhw_productos_registrados_multisalud';
	$usertable="TABLE 1";
	$yourfield = "codigo";
    
    $conn = OpenCon();
    
    $bd = mysqli_select_db($conn, $dbname);
    
    $query = "SELECT * FROM `TABLE 1` WHERE id = 254";
	
	$result = mysqli_query($conn, $query);

	
	if($conn){
	    echo "correcto </br>";
	} else {
	    echo "incorrecto</br>";
	}
	
	if($bd){
	    echo "base seleccionada </br>";
	} else {
	    echo " base no seleccionada</br>";
	}
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$search = $row["$yourfield"];
			echo "$search";
		    }
	    }else {
	        echo "no hay resultado";
	    }
	
	
	
	function buscar ($valorBusqueda){
	   // $consulta = "SELECT `codigo`, `descripcion`, `precio` FROM `TABLE 1` WHERE codigo = $valorBusqueda";
	   // $resultado = mysqli_query($conn, $consulta);
	   return $result;
	    
	}
	
    
?>