<!DOCTYPE html>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Autenticação Usuário</title>

    </head>

    <body>

        

        <section>

            <?php

                $usuarioAutenticado = $_POST["usuario"];
                $senhaAutenticada = $_POST["senha"];

                if ($usuarioAutenticado == "Kleber@gmail.com" && $senhaAutenticada == 12345 ) {

                    echo "Acesso Liberado";
                    
                } elseif($usuarioAutenticado != "Kleber@gmail.com") {

                    echo "Usuário inválido";
                    
                } elseif($senhaAutenticada != 12345) {

                    echo "Senha inválida";
                    
                } else {
                    
                    echo "Usuário e senha Inválidos";
                }
            ?><br><br>
            <a href="index.php">Inicio</a>

        </section>



    </body>
</html>
