<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/paginaeditar.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("../../factory/conexao.php");

        $conn = new caminho();

        $codigo = $_POST['codigo'];

        $query = 'SELECT * FROM tbProduto WHERE cod_prod = :cod';

        $select = $conn->getConn()->prepare($query);
        $select->bindParam(':cod',$codigo,PDO::PARAM_STR);

        $select->execute();
        $produto = $select->fetch(PDO::FETCH_ASSOC);

    echo "
        <div class='caixa-centro'>
            <h1>Editar Produto</h1>
            <a href='post_produto.php'><button>⊰</a></button>
            <form action='../../model/editar_produto.php' method='POST' enctype='multipart/form-data' name='cadastro'>
                
                <div class='campo-formulario'>
                    Nome do Produto: <br>
                    <input type='text' name='cxnome' id='cxnome' value='".$produto['nome_prod']."'><br>
                </div>
                <div class='campo-formulario'>
                    Preço do Produto: <br>
                    <div>R$<input type='text' step='.01' name='cxpreco' id='cxpreco' value='".$produto['valor_prod']."'><br></div>
                </div>  

                <div class='campo-formulario'>
                    Descrição: <br>
                    <textarea name='cxdesc' id='cxdesc' cols='30' rows='4' maxlength='120' placeholder='Limite de 120 de caracteres'>".$produto['desc_prod']."</textarea>
                </div>

                <div class='campo-formulario'>
                    Imagem do produto: <br>
                    <img id = 'imagemfoda' src='../../fotos/".$produto['foto']."' width='150px' height='150px'><br>
                    Nova Foto: <br>
                    <input type='file' name='imagem' id='imagem' >
                    <input type='text' name='imagem_antiga' value='".$produto['foto']."' hidden readonly>
                </div>

                <div class='campo-formulario'>
                    Quantidade: <br>
                    <input type='text' name='cxqtd' id='cxqtd' value='".$produto['qtde']."'>
                </div>
                <input type='text' hidden readonly name='codigo' value='".$codigo."'>
                <div class='campo-formulario'>
                    <input type='submit' name='Editar' value='Editar'> <br>
                </div>  
                
            </form>
        </div>
    "
    ?>

</div>
</body>
</html>