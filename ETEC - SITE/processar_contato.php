<?php
// Receber dados do formulário
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];

// Exibir os dados recebidos
echo "<h2>Dados Recebidos:</h2>";
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Telefone: " . $telefone . "<br>";
echo "Assunto: " . $assunto . "<br>";
echo "Mensagem: " . $mensagem . "<br>";
echo "<h3>Formulário enviado com sucesso!</h3>";
?>

