<?php
    $cnpj = $_POST['cnpj'];
    $inscricao = $_POST['inscricao'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $razao = $_POST['razao'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    echo " CNPJ : ".$cnpj."<br>";
    echo " inscrição : ".$inscricao."<br>";
    echo " telefone : ".$telefone."<br>";
    echo " cep : ".$cep."<br>";
    echo " endereço : ".$endereco."<br>";
    echo " complemento : ".$complemento."<br>";
    echo " razão : ".$razao."<br>";
    echo " nome : ".$nome."<br>";
    echo " email : ".$email."<br>";
    echo " numero : ".$numero."<br>";
    echo " estado : ".$estado."<br>";
    echo " bairro : ".$bairro."<br>";
    echo " cidade : ".$cidade."<br>";
?>

<form>
   <input type='button' value='Voltar' onclick="javascript: location.href='Cadastro de emprese.php';" />
   <input type='button' value='Prosseguir' onclick="javascript: location.href='Index.php';" />
</form>