<?php
  $valor   = $_POST['txtvalor'];
  $horas   = $_POST['txthoras'];
  $salario = $valor * $horas;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Cálculo de Salário</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <h1>Resultado</h1>

    <div class="resultado">
     
      <p class="salario">o salário é <strong>R$ <?php echo number_format($salario, 2, ',', '.'); ?></strong></p>

      <table>
        <tr>
          <th>Horas trabalhadas</th>
          <td><?php echo $horas; ?> h</td>
        </tr>
        <tr>
          <th>Valor da hora</th>
          <td>R$ <?php echo number_format($valor, 2, ',', '.'); ?></td>
        </tr>
        <tr class="total">
          <th>Salário total</th>
          <td>R$ <?php echo number_format($salario, 2, ',', '.'); ?></td>
        </tr>
      </table>
    </div>

    <a href="calcularsalario.html" class="btn-voltar">← Calcular novamente</a>
  </div>

</body>
</html>
