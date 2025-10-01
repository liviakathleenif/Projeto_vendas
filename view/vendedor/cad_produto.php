<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../estilo/formularios.css">
    <title>Document</title>
</head>
<body>
    <div class="caixa-centro">
        <h1>Cadastro de Produtos</h1>
        <a href="pagina_vend.php"><button>⊰</a></button>
        <form action="../../model/inserir_produto.php" method="POST" enctype="multipart/form-data" name="cadastro">
            
            <div class="campo-formulario">
                Nome do Produto: <br>
                <input type="text" name="cxnome" id="cxnome"><br>
            </div>
            <div class="campo-formulario">
                Preço do Produto: <br>
                <div>R$<input type="number" step=".01" name="cxpreco" id="cxpreco"><br></div>
            </div>  
    
            <div class="campo-formulario">
                Descrição: <br>
                <textarea name="cxdesc" id="cxdesc" cols="30" rows="4" maxlength="120" placeholder="Limite de 120 de caracteres"></textarea>
            </div>
    
            <div class="campo-formulario">
                Imagem do produto: <br>
                <input type="file" name="imagem" id="imagem"><br>
            </div>
    
            <div class="campo-formulario">
                Quantidade: <br>
                <input type="number" name="cxqtd" id="cxqtd">
            </div>
            <div class="campo-formulario">
                <input type="submit" name="Cadastrar" value="Cadastrar"> <br>
            </div>  
        </form>
    </div>
</body>
</html>
