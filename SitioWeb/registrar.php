<html>
    <head>
        <title>Swimnovate, Informática Deportiva - Registro de Nadador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>

<?php
    $nombre = $_POST['nombre'];
    $user_email = $_POST['user_email'];
    $dom_email = $_POST['dom_email'];
    $dr = $_POST['dr'];
    $rama_nat = $_POST['rama_nat'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $edad = $_POST['edad'];
    $estatura = $_POST['estatura'];
    $peso = $_POST['peso'];

    /* Lo siguiente se puede mejorar haciendo que muestre cual campo es incorrecto en la página anterior */
    if( !$nombre || !$user_email || !$edad || !$estatura || !$peso ) {
        echo '<div align="center"> <font style="color:red">Faltan datos por ingresar. </br>'
             .'Por favor vuelva atrás e intente nuevamente.</font> </div> <br />';
        exit;
    }

    if( $password != $conf_password ) {
        echo '<div align="center"> <font style="color:red"> La contraseña no coincide </font> </div> <br />';
        exit;
    }

    if( !get_magic_quotes_gpc()) {
        $nombre = addslashes($nombre);
        $user_email = addslashes($user_email);
        $dom_email = addslashes($dom_email);
        $rama_nat = addslashes($rama_nat);
        $dr = addslashes($dr);
        $password = addslashes($password);
        $edad = intval($edad);
        $estatura = floatval($estatura);
        $peso = floatval($peso);
    }

    $db = new mysqli('localhost', 'dba', 'swimnovatedb', 'swimnovate');

    if(mysqli_connect_errno () ){
        echo '<div align="center"> <font style="color:red"> No se puede conectar a la base de datos. </font> </div> <br />';
        exit;
    }

    $query = "insert into Nadadores values( '".utf8_encode($nombre)."',
                                            '".$user_email."@".$dom_email."',
                                            '".$user_email."@".$dom_email."',
                                            '".$password."',
                                            '".$dr."',
                                            '".$rama_nat."',
                                            '".$edad."',
                                            '".$estatura."',
                                            '".$peso."' ) ";

    $resultado = $db->query($query);

    if( $resultado ){
        header('Location: registro_exitoso.html');
    }
    
    $db->close();

?>

    </body>
</html>