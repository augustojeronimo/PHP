<html lang="pt-br">
<body>
    <form action="globais.php" method="GET">
        Nome: <input type="text" name="nome" id="nome"> <br>
        E-mail: <input type="email" name="email" id="email"> <br>
        <input type="submit" value="enviar" name="enviar">
        <input type="submit" value="deletar" name="enviar">
    </form>
    <hr>
</body>
</html>

<?php

echo $_GET['nome'];