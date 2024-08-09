<?php
session_start();



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

$usuario_autenticado=false;

    $usuario_app=array(
            array(
                'cpf' => '123456789',
                'senha' => '12345'
            ),
            array(
                'cpf' => '123456789',
                'senha' => '12345'
            )

        );


foreach ($usuario_app as $user) {
    if($user['cpf']==$_POST['cpf'] && $user['senha']==$_POST['senha']) { 
        $usuario_autenticado=true; 
    }
};


if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    header('location:index.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('location:index.php');
}

?>

</body>
</html>