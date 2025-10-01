<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/formularios.css">
    <title>Cadastro de vendedor</title>
</head>
<body>
    <div class="caixa-centro">
    <button><a href="tela_adm.php">⊰</a></button>
        <h1>Cadastro de Vendedor</h1>

        <form action="../../model/cadastrar_vendedor.php" method="POST">
            
            <div class="campo-formulario">
                Nome: <br>
                <input type="text" name="cxnome" required><br>
            </div>  
    
            <div class="campo-formulario">
                Email: <br>
                <input type="email" name="cxemail"required><br>
            </div>
    
            <div class="campo-formulario">
                Telefone: <br>
                <input type="text" name="cxtel" required><br>
            </div>
    
            <div class="campo-formulario">
                Senha: <br>
                <input type="password" name="cxsenha" required>
            </div>  
            <div class="campo-formulario">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>  
</body>
</html>