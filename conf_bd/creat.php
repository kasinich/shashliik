<?php
    include_once '../conf_bd/bd.php';
    $name=$_POST['name'];
    $passw=$_POST['passw'];
    mysqli_query($mysql, "INSERT INTO `reg` (`id`, `name`, `password`) VALUES (NULL, '$name', '$passw')");
    
?>