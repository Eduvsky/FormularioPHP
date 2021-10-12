<!DOCTYPE >
<head>
    <meta charset="utf-8" />
    <link href="stylesheet/Cadastro de empresa.css"rel="stylesheet" type="text/css" media="screen">
    <title>Cadastro </title>
</head>
<body>
<h1> Concluir  Cadastro <h1>
<br>
<form method="POST" action="Result.php">
    
<div class="main">
        <br> CNPJ : <input type="text" name="cnpj" /> <br> <br>
       
        Inscrição Municipal : <input type="text" name="inscricao" />
<br> 
        <br> 
        Telefone Comercial : <input type="text" name="telefone" />
<br> 
<br>
        CEP : <input type="text" name="cep" />
<br> 
       <br> Endereço : <input type="text" name="endereco" /></br>
   
<br>
Complemento opcional : <input type="text" name="complemento" />
<br><br


<br> Razão Social : <input type="text" name="razao" />
<br>
<br> Nome : <input type="text" name="nome" />
<br>
<br>Email : <input type="text" name="email" />

<br>
<br> Número : <input type="text" name="numero" />
<br>

<br> Estado : <input type="text" name="estado" />
<br>

<br> Bairro : <input type="text" name="bairro" />
<br>
        <br> Cidade : <input type="text" name="cidade" />

</div>
</div>
<label><input type="submit" name="enviar" value="Voltar" /></label>
    <label><input type="submit" name="enviar" value="Enviar" /> <br><br>
</label>
</form>

</body>
</html>

<?php
    $nome = $_POST['name'];           
    $email = $_POST['email'];       
    $tel = $_POST['telefone'];

     echo "telefone: ".$tel."<br/>";
     echo "nome: ".$nome."<br/>";
     echo "email: ".$email."<br/>";  
?>