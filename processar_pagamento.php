<?php
// Verifica se os campos do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados do formulário
  $nome = $_POST["nome"];
  $numero_cartao = $_POST["numero_cartao"];
  $data_validade = $_POST["data_validade"];
  $cvv = $_POST["cvv"];

  // Aqui você pode adicionar a lógica para processar o pagamento
  // Por exemplo, validar os dados do cartão, realizar a transação, etc.

  // Exemplo de mensagem de sucesso
  $mensagem = "Pagamento processado com sucesso. Obrigado, $nome!";
} else {
  // Se os campos não foram enviados corretamente, exibe uma mensagem de erro
  $mensagem = "Ocorreu um erro no processamento do pagamento. Por favor, tente novamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Resultado do Pagamento</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Resultado do Pagamento</h1>
  <p><?php echo $mensagem; ?></p>
</body>
</html>
