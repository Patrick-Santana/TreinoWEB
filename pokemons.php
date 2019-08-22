<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="pokemons.css">
</head>
<body>

	<?php
		$pokemons = file("pokemons.csv");
			for($i = 0; $i < sizeof($pokemons); $i++) {
				$pokemons[$i] = explode("/", $pokemons[$i]);
			}
	?>
	<table>
		<tr>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Seg.Tipo</th>
			<th>Estágio anterior</th>
		</tr>
			<?php foreach($pokemons as $pokemon):?>
				<tr>
					<?php foreach($pokemon as $pocket):?>
						<td><?= $pocket?></td>
						<?php endforeach?>
				</tr>
			<?php endforeach?>
	</table>
</body>
</html>
