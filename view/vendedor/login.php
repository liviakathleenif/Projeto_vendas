<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../estilo/formularios.css?v=2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="caixa-centro">
        <form action="../../model/logar.php" method="post">
        <a href="../../homepage.php"><button>⊰</a></button> 
            <div class="campo-formulario">    
                Email: <br>
                    <input type="email" name="cxemail" required><br>
            </div>    
            <div class="campo-formulario">
                Senha: <br>
                <input type="password" name="cxsenha" required> 
            </div>
            <div class="campo-formulario">
                <input type="submit" name="Entrar" value="Entrar"> <br>
            </div> 
        </form>
    </div>
</body>
</html>