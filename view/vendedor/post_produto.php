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
<a href="pagina_vend.php"><button>⊰</button> </a>
    <div id='principal'>
        <?php
        require_once("../../factory/conexao.php");

        $conn = new caminho();
        if(isset($_POST['postar'])){
            $poun = $_POST['poun'];
            $cod = $_POST['postar'];
            $postar = 'UPDATE tbProduto SET postado = :poun WHERE cod_prod = :cod';
            

            $alterar = $conn->getConn()->prepare($postar);
            $alterar->bindParam(':cod',$cod,PDO::PARAM_STR);
            $alterar->bindParam(':poun',$poun,PDO::PARAM_STR);

            $alterar->execute();
        
        }
        if(isset($_POST['excluir'])){
            $cod = $_POST['excluir_cod'];
            $consulta = 'SELECT foto FROM tbProduto WHERE cod_prod = :cod';
            $excluir = 'DELETE FROM tbProduto WHERE cod_prod = :cod';

            
            $select = $conn->getConn()->prepare($consulta);
            $select->bindParam(':cod',$cod,PDO::PARAM_STR);
            $select->execute();
            $img = $select->fetch(PDO::FETCH_ASSOC);
            $caminho_img = "../../fotos/".$img['foto'];
            unlink($caminho_img);

            
            $deletar = $conn->getConn()->prepare($excluir);
            $deletar->bindParam(':cod',$cod,PDO::PARAM_STR);
            $deletar->execute();
        }
        
        $query = "SELECT * FROM tbProduto";

        $selecionar = $conn->getConn()->prepare($query);

        $selecionar->execute();

        $produtos = $selecionar->fetchAll(PDO::FETCH_ASSOC);

        
        for ($i = 0; $i<count($produtos); $i++){

            echo "
            <div class='produto'>
                <p name='nome'>".$produtos[$i]['nome_prod']."</p><br>
                <p name='preco'>".'R$'.$produtos[$i]['valor_prod']."</p><br>
                <p name='qtd'>".$produtos[$i]['qtde']."</p><br>
                <img src='../../fotos/".$produtos[$i]['foto']."'>
                "
                .($produtos[$i]['postado'] == '1' ? "<form action='../vendedor/post_produto.php' 
                method='post'><input type='text' readonly hidden name='poun' value='0'>
                <input type='text' readonly hidden name='postar' value='".$produtos[$i]['cod_prod']."'><input type='submit' value='ocultar'></form>"
                : "<form action='../vendedor/post_produto.php' method='post'><input type='text' readonly hidden name='poun' value='1'>
                <input type='text' readonly hidden name='postar' value='".$produtos[$i]['cod_prod']."'>
                <input type='submit' value='postar'></form>" ).
                "
                <form action='post_produto.php' method='post'>
                    <input name='excluir' type='text' value='excluir' readonly hidden>
                    <input name='excluir_cod' type='text' value='".$produtos[$i]['cod_prod']."' readonly hidden>
                    <input type='submit' value='excluir'>
                </form>
                <form action='editar.php' method='post'>
                    <input name='codigo' type='text' value='".$produtos[$i]['cod_prod']."' readonly hidden>
                    <input type='submit' value='editar'>
                </form>
            </div>
            ";
        };
        ?>
    <div>
</body>
</html>