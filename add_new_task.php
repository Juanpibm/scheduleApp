<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    
</head>

<body onload="deshabilitaRetroceso()">
    <form method="post">
        <input type="text" name="title" placeholder="Titulo de la Tarea" required />
        <input type="text" name="description" placeholder="Descripcion de la Tarea" />
        <input type="date" name="date" placeholder="Fecha de entrega" required/>
        <input type="time" name="time" placeholder="Hora de entrega" required/>
        <fieldset>
            <legend> Elige tipo </legend>
            <label>
                <input type="radio" name="type" value="1" required>TAREA
            </label>
            <label>
                <input type="radio" name="type" value="2" required>PROYECTO
            </label>
            <label>
                <input type="radio" name="type" value="3" required>EXAMEN
            </label>
        </fieldset>

        <input type="submit" name="save"/>

    </form>

    <?php
        include("registrar.php");
    ?>


</body>

</html>