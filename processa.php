<?php

// Pegando os dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];

// Checkbox (array)
$interesses = isset($_POST['interesses']) ? $_POST['interesses'] : [];

// Convertendo array para texto
$interessesTexto = implode(", ", $interesses);

// Exibindo dados
echo "<h2>Dados Recebidos</h2>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Idade: $idade <br>";
echo "Sexo: $sexo <br>";
echo "Cidade: $cidade <br>";
echo "Interesses: $interessesTexto <br>";

?>