<?php 
  $arr = [
    'João' => 28,
    'Maria' => 30,
    'Pedro' => 25,
    'Ana' => 22,
  ];

?>

<table border=1>
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>

  <?php foreach ($arr as $nome => $idade): ?>
    <tr>
      <td><?= $nome ?></td>
      <td><?= $idade ?></td>
    </tr>
  <?php endforeach; ?>
</table>
