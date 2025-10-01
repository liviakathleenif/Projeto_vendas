<?php
    require_once('../factory/conexao.php');
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $telefone = $_POST['cxtel'];
    $senha = $_POST['cxsenha'];

    $conn = new caminho();
    $query = "INSERT INTO tbVendedor(nome_vend,telefone_vend,email,senha) VALUES (:nome, :telefone, :email, :senha)";

    $cadastrar = $conn->getConn()->prepare($query);

    $cadastrar->bindParam(':nome',$nome,PDO::PARAM_STR);
    $cadastrar->bindParam(':telefone',$telefone,PDO::PARAM_STR);
    $cadastrar->bindParam(':email',$email,PDO::PARAM_STR);
    $cadastrar->bindParam(':senha',$senha,PDO::PARAM_STR);

    $cadastrar->execute();
    if ($cadastrar->rowCount()){
     
        $select = $conn->getConn()->prepare("select * from tbVendedor");
        $result = $select->execute();

        echo "
        <script> alert('Vendedor Cadastrado com Sucesso ".$result."') 
        location.href = '../view/adm/tela_adm.php';
        
        </script>";
    // Verifica se a consulta SQL foi executada com sucesso e exibe uma mensagem de sucesso.
    }
    else
    {
        echo ('<script>Vendedor Não Cadastrado, tente novemente.</script>');
    } 
?>