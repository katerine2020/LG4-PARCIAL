<?php 
    include('include/bd.php');
    $sql = "select * from personas";
    $result = DB::query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuarios</title>
</head>
<body>
<div class="container">
    <div>
        <form action="crear.php">
        <button type="submit">Agregar usuario</button>
        </form>
    </div>

    <div>
        <br>
        <table class="table" border="2">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Email</td>
                <td>Estado</td>
                <td>Acciones</td>
            </tr>
            </thead>

            <tbody class="center">
            <?php while($mostrar=mysqli_fetch_array($result)){?>
            <tr>
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['nombres'] ?></td>
                <td><?= $mostrar['apellidos'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $mostrar['id']?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>