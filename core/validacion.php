<?php
session_start();

switch ($_REQUEST['val']) {
  case '1': //Registro de Usuario
    if ($_POST['email'] && $_POST['pass'] && $_POST['passR'] && $_POST['nom'] && $_POST['ape'] && $_POST['tel'] && $_POST['pais']) {
        $email = $_POST['email'];
        if ($_POST['pass'] != $_POST['passR']) {
            $_SESSION['msj'] = 'Error en la contraseña.';
            echo '<script> history.back(); </script>';
        } else {
            // if ($_POST['pais'] != "X") {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    include 'link.php';
                    $sql = "SELECT id FROM users WHERE email='" . $_POST['email'] . "'";
                    $query = mysqli_query($link, $sql);
                    $num = mysqli_num_rows($query);
                    if ($num > 0) {
                        $_SESSION['msj'] = 'El usuario ya existe, intente de nuevo.';
                        echo '<script> history.back(); </script>';
                    } else {
                        $_POST['nom'] = ucwords(strtolower($_POST['nom']));
                        $_POST['ape'] = ucwords(strtolower($_POST['ape']));
                        $time = time();
                        $fecha = date("Y-m-d H:i:s", $time);
                        $sql = "INSERT INTO users VALUES('','" . $_POST['email'] . "','" . md5($_POST['pass']) . "','" . $_POST['nom'] . "','" . $_POST['ape'] . "','" . $_POST['tel'] . "','" . $_POST['pais'] . "','1','".$fecha."')";
                        // $mensage = 'Su password es: ' . $_POST['pass'];
                        // $asunto = 'Desing and Developer (PASSWORD)';
                        // $cabecera = "from: " . "Desing and Developer" . "<" . "desinganddeveloper@gmail.com" . ">";
                        // $envio = mail($_POST['email'], $asunto, $mensage, $cabecera);
                        // if ($envio) {
                            mysqli_query($link, $sql);
                            if (!mysqli_error($link)) {
                                $_SESSION['msj'] = 'Usuario registrado exitosamente.';
                                $_SESSION['msj'] = "Revise su correo electronico.";
                                echo '<script> history.back(); </script>';
                            } else {
                                $_SESSION['msj'] = 'Error en la carga intentelo de nuevo.';
                                echo '<script> history.back(); </script>';
                            }
                        // } else {
                        //     $_SESSION['msj'] = "Error en la carga intentelo de nuevo.";
                        //     echo '<script> history.back(); </script>';
                        // }
                    }
                } else {
                    $_SESSION['msj'] = "El correo no es valido.";
                    echo '<script> history.back(); </script>';
                }
            // } else {
            //     $_SESSION['msj'] = "Seleccione el sexo";
            //     echo '<script> history.back(); </script>';
            // }
        }
    }
  break;
  case '2':
    // code...
    break;
}

 ?>
