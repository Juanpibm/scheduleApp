<?php

include("conexion.php");
if(isset($_POST['save'])){
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = false;
$type = $_POST['type'];

$consulta = "INSERT INTO tasks(title, description, delivery_date, delivery_time, status, type) 
VALUES ('$title', '$description', '$date', '$time', '$status', '$type') ";

$resultado = mysqli_query($conection, $consulta);
mysqli_close($conection);
if($resultado){
    ?>

<script>
alert("TAREA AGREGADA CORRECTAMENTE!");
location.href = "home.php";
</script>




<?php
}
else{
    ?>
<script>
alert("TAREA NO AGREGADA CORRECTAMENTE!");
</script>
<?php
}

}
?>