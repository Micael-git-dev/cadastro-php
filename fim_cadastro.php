<!DOCTYPE html>
<html>
    <header>  
        <meta charset="UTF-8">     
    </header>
        <body>
            <?php
                echo "Nome: " . htmlspecialchars ($_POST['nome']) . "<br>";
                echo "Sexo: " . htmlspecialchars ($_POST['sexo']) . "<br>";
                echo "Senha: " . htmlspecialchars ($_POST['senha']) . "<br>";
                echo "Comentário: " . htmlspecialchars ($_POST['comentario']) . "<br>";

            ?>
        </body>
</html>