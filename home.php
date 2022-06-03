<!DOCTYPE html>

<html>

<head>
    <link href="styles/styles-home.css" rel="stylesheet" type="text/css" />
    <title>Home</title>
</head>

<body onload="deshabilitaRetroceso()">
    <header>
        <section class="contenedor-header">
            <img class="logo-app" src="images/Schedule_App_Logo.png" alt="Este es el logo de Schedule App"></img>
            <h1 class="title-app">SCHEDULE APP</h1>
            <button class="close-app" onclick="functionCloseSesion()">Sign Out</button>
        </section>
    </header>

    <section class="contenedor-padre">

        <?php
        include('conexion.php');
        $consulta = "SELECT * FROM tasks";
        $resultado = mysqli_query($conection, $consulta);
    
        $filas = mysqli_num_rows($resultado);
    
        if($filas){
            while($filas = $resultado->fetch_array()){
                $title = $filas['title'];
                $description = $filas['description'];
                $delivery_date = $filas['delivery_date'];
                $delivery_time = $filas['delivery_time'];
                $status = $filas['status'];
                $type = $filas['type'];

                $imagen = 'tarea.png';

                if($type == 2){
                    $imagen = 'proyecto.png';
                }
                if($type == 3){
                    $imagen = 'examen.png';
                }

                $background_color = '#3E9AFD';
                $font_size = '0cm';
                if($status){
                    $background_color = '#FFFFFF';
                    $font_size = 'xx-large';
                }
                ?>

        <section class="itemContenedor">
            <button type="checkbox" class="check" <?php echo 'style = "font-size:'.$font_size.' ; background-color:'.$background_color.'";'?> >&#x2714</button>

            <div class="contenedor-blanco">
                <div class="contenedor-izquierdo">
                    <div class="titulo-tarea"> <?php echo $title ?> </div>
                    <div class="titulo-description"> <?php echo $description ?> </div>
                </div>
                <div class="contenedor-derecho">
                    <div class="contenedor-tiempo">
                        <div class="fecha"> <?php echo $delivery_date ?> </div>
                        <div class="hora"> <?php echo $delivery_time ?> </div>
                    </div>
                    <div class="contenedor-imagen">
                        <img class="task-type-img" <?php echo 'src="images/'.$imagen.'"' ?>>
                    </div>
                </div>
            </div>
        </section>


        <?php
            }
        }
        mysqli_close($conection);
    ?>

    </section>


    <footer>
        <div class="bottom">
            <button id="btnNewTask" type="button" class="addNew" onclick="funcionAddNewTask()">+</button>

            <script>

            function funcionAddNewTask() {
                location.href = "add_new_task.php";
            }

            function functionCloseSesion() {
                confirm("¿Desea cerrar sesion?");
                location.href = "login.html";
            }
            </script>
        </div>

    </footer>
</body>

<footer></footer>

</html>