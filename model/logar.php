<?php
    require_once("../factory/conexao.php");

    $nome = $_POST['cxemail'];
    $senha = $_POST['cxsenha'];

    $conn = new caminho();

    $query = "SELECT email, senha FROM tbVendedor WHERE email = :email";

    $selecionar = $conn->getConn()->prepare($query);

    $selecionar->bindParam(':email',$nome,PDO::PARAM_STR);

    $selecionar->execute();

    $resultado = $selecionar->fetch(PDO::FETCH_ASSOC);

    if ($senha == $resultado['senha']){
        echo "
        <script> alert('Login Realizado com sucesso') 
        location.href = '../view/vendedor/pagina_vend.php';
        
        </script>";
    } else{
        echo "
        <script>alert('Usuário Inexistente ou Senha Errada, tente novamente')
        location.href = '../view/vendedor/login.php'
        </script>
        ";
    };
?>

