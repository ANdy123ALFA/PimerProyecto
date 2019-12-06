
<?php

    function UPDATE (){
        include("connect.php");
        $r_id = $_POST['id'];
        $r_marca = $_POST['r_marca'];
        $r_mecanico = $_POST['r_mecanico'];
        $r_material = $_POST['r_material'];
        $r_cronometro = $_POST['r_cronometro'];
        $r_descripcion = $_POST['r_descripcion'];
        $r_precio = $_POST['r_precio'];
        $r_imagen = $_POST['r_img'];
        
        if ($query = $conexion->prepare("UPDATE relojes SET marca = '$r_marca', mecanico = '$r_mecanico', material = '$r_material', cronometro = '$r_cronometro',descripcion ='$r_descripcion', precio = $r_precio, imagen ='$r_imagen' WHERE idReloj = $r_id;")) {
            $query->execute();
            $query->close();
        };

        header("location: administrar.php");
    };

    function INSERT (){
        include("connect.php");
        $r_marca = $_POST['r_marca'];
        $r_mecanico = $_POST['r_mecanico'];
        $r_material = $_POST['r_material'];
        $r_cronometro = $_POST['r_cronometro'];
        $r_descripcion = $_POST['r_descripcion'];
        $r_precio = $_POST['r_precio'];
        $r_imagen = $_POST['r_img'];
        
        if ($query = $conexion->prepare("insert into relojes values ('','$r_marca','$r_mecanico','$r_material','$r_cronometro','$r_descripcion',$r_precio,'$r_imagen');")) {
            $query->execute();
            $query->close();
        };

        header("location: administrar.php");
    };

    function DELETE (){
        include("connect.php");
        $r_id = $_GET['id'];
        
        if ($query = $conexion->prepare("DELETE FROM relojes WHERE idReloj = ".$r_id)) {
            $query->execute();
            $query->close();
        };

        header("location: administrar.php");

    }

    switch ($_GET['operacion']){
        case "editar": UPDATE(); break;
        case "agregar": INSERT(); break;
        case "eliminar": DELETE(); break;
    }

?>
