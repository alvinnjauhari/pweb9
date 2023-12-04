<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "register_siswa";

$db = mysqli_connect($server, $user, $password);

if( $db ){
    $buka = mysqli_select_db($db, $nama_database);
    echo "Database dapat terhubung.";
    if (!$buka){
        echo "Database tidak dapat terhubung";
    }
}
else{
    echo "MYSQL TIDAK TERUBUNG.";
}

?>