<!DOCTYPE >
<head>
    <meta charset="utf-8" />
    <link href=" "rel="stylesheet">
    <title>Cadastro </title>
</head>
<body>
<h1> Concluir  Cadastro <h1>
<br>
<form method="POST" action="Result.php">
    
        <label>CNPJ <br> <input type="text" name="cnpj" />
</label> <br> <br>
        <label>Inscrição Municipal<br>
<input type="text" name="inscricao" />
<br> <br> </label>
        <label>Telefone Comercial<br> 
<input type="text" name="telefone" />
<br> <br></label>
        <label>CEP <br>
<input type="text" name="cep" />
<br> <br></label>
       
        <label>Endereço<br> <input type="text" name="endereco" /></br><br></label>
   
        <label>Complemento opcional 
<br>
<input type="text" name="complemento" />
<br><br></label>
        <label>Razão Social<br> <input type="text" name="razao" />
<br><br></label>
        <label>Nome<br> <input type="text" name="nome" />
<br><br></label>
        <label>Email<br><input type="text" name="email" />

<br><br></label>

<label>Número<br> <input type="text" name="numero" />
<br><br></label>

        <label>Estado<br> <input type="text" name="estado" />
<br><br></label>

<label>Bairro<br> <input type="text" name="bairro" />
<br><br></label>
        
     <label>Cidade<br> <input type="text" name="cidade" />
</label>


<label><input type="submit" name="enviar" value="Voltar" /></label>
    <label><input type="submit" name="enviar" value="Enviar" />
</label></div>
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