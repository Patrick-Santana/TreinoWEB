<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilotabela.css">
  <title>Tabela Sobre Jogadores</title>
</head>

<body>
  <?php 
    $content = file("times.csv");
  
    $timesData = array_map('explode', array_fill(0, sizeof($content), ','), $content);

  ?>

  <h1>Table Sobre Jogadores</h1>

  <table>
    <tr>
      <th>Jogador</th>
      <th>Time</th>
      <th>Gols</th>
    </tr>
    <?php foreach ($timesData as $times): ?>
      <tr>
        <?php foreach ($times as $data): ?>
          <td><?= $data ?></td>
        <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </table>

</body>
</html>
