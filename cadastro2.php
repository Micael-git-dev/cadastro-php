<!DOCTYPE html>
<html>
    <header>  
        <meta charset="UTF-8"> 
        <title>Cadastro 2</title>     
    </header>
        <body>
            <form action="fim_cadastro.php" method="post">
            Senha: <input name="senha" type="password" required minlength="5"><br>
            Comentário:<br>
            <textarea name="comentario" cols="30" rows="6"></textarea>           
            <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"></input>
            <input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"></input>
            <input type="submit" value="Finalizar Cadastro">
            </form>
        </body>
</html>
