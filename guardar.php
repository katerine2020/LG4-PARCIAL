<?php 
    include('include/bd.php');
    if(isset($_GET['estado']) == TRUE){
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){
            $es = "inactivo";
        }else{
            $es = "activo";
        }
        $sql = "UPDATE personas set estado='$es' WHERE id='$id'";
    }else{
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $estado = $_POST['estado'];

        if(isset($id) == false){
            $estado = "activo";
            $sql = "insert into personas(nombres,apellidos,email,password,estado) values('$nombre ',' $apellido ',' $email',MD5 ('$password'), '$estado')"; 
        }else{
            if($password != ""){
                $sql = "UPDATE personas set nombres='$nombre', apellidos='$apellido',email='$email',password=MD5('$password'),estado='$estado' WHERE id='$id'";
            }else{
                $sql = "UPDATE personas set nombres='$nombre', apellidos='$apellido',email='$email',estado='$estado' WHERE id='$id'";
            }
        }
    }
    DB::query($sql);
    header('Location: index.php');
?>