<!DOCTYPE html>
<html>
    <header>  
        <meta charset="UTF-8">
        <title>Cadastro 1</title>     
    </header>
        <body>
            <form action="cadastro2.php" method="post">
            Nome: <input type="text" name="nome" required pattern=".*\s+.*"><br>
            Sexo:
            <input type="radio" name="sexo" value="masculino" required> Masculino
            <input type="radio" name="sexo" value="feminino" required> Feminino
            <br><br>
            <input type="submit" value="próximo">
            </form>
        </body>
</html>
