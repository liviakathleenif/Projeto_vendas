<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/post_produto.css?v=2">
    <title>Document</title>
</head>
<body>
    <header style='background-color:blue;'>Header ÉPICO</header>
    <div id='principal'>
        <?php
        require_once("../../factory/conexao.php");

        $conn = new caminho();
        
        $query = "SELECT * FROM tbProduto";

        $selecionar = $conn->getConn()->prepare($query);

        $selecionar->execute();

        $produtos = $selecionar->fetchAll(PDO::FETCH_ASSOC);

        
        for ($i = 0; $i<count($produtos); $i++){
            if($produtos[$i]['postado']=='1'){
                echo "
                <div class='produto'>
                    <p name='nome'>".$produtos[$i]['nome_prod']."</p><br>
                    <p name='preco'>".'R$'.$produtos[$i]['valor_prod']."</p><br>
                    <p name='qtd'>".$produtos[$i]['qtde']."</p><br>
                    <img src='../../fotos/".$produtos[$i]['foto']."'>
                    
                    <form action='../../model/comprar.php' method='post'>
                        <input name='codigo' type='text' value='".$produtos[$i]['cod_prod']."' readonly hidden>
                        <input type='submit' value='comprar'>
                    </form>
                </div>
                ";

            }
        };
        ?>
    <div>
</body>
</html>