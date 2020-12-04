<?php 
$loginCorrecto=NULL;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $loginCorrecto = (isset($_POST['usuario']) && $_POST['usuario'] == 'admin') && (isset($_POST['password']) && $_POST['password'] == 'admin');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
    <?php 
        if($loginCorrecto !== NULL){
            if($loginCorrecto){
                echo "Login correcto";
            }else {
                echo "El usuario o la contraseña no son correctas";
            }
        }
    ?>
    </h1>
    <form action="" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" />
        
        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <button>prueba</button>

        <input type="submit" value="Login" />
    </form>

</body>
</html>