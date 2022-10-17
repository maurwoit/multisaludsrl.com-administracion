<?php

    function OpenCon(){
        $hostname='localhost';
	    $username='xvebnjhw_Multisalud-Admin';
	    $password="(MultiSalud_A)";
	    $dbname='xvebnjhw_productos_registrados_multisalud';
	    $usertable="TABLE 1";
	    $yourfield = "codigo";
	
	    $conn = mysqli_connect($hostname,$username, $password) or die ("ERROR AL CONECTARSE A LA BASE DE DATOS, ESTAMOS TRABAJANDO EN ARREGLARLO");
	
	    $bd = mysqli_select_db($conn, $dbname);
	    return $conn;
    }
    
    function CloseCon($conn){
        $conn -> close();
    }
    

?>