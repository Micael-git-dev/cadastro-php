<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">     
    </head>
        <body>
            <?php
                echo "Nome: " . htmlspecialchars ($_POST['nome']) . "<br>";
                echo "Sexo: " . htmlspecialchars ($_POST['sexo']) . "<br>";
                echo "Senha: " . htmlspecialchars ($_POST['senha']) . "<br>";
                echo "Comentário: " . htmlspecialchars ($_POST['comentario']) . "<br>";

            ?>
        </body>
</html>
