<link rel="stylesheet" type="text/css" href="assets/css/stylerelatorioo.css" />

<div class="h1">
	<h1>Relatório</h1>
</div>

<div>
	<div class="interior">
		<table>
			<tr>
				<th>Nome do Produto</th>
				<th>Qtd.</th>
				<th>Qtd. Min.</th>
				<th>Diferença</th>
			</tr>
			<?php foreach($list as $item): ?>
				<tr>
					<td><?php echo $item['name']; ?></td>
					<td><?php echo $item['quantity']; ?></td>
					<td><?php echo $item['min_quantity']; ?></td>
					<td><?php echo (floatval($item['min_quantity']) - floatval($item['quantity'])); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div class="botao"><a href="../estoque">Voltar</a></div>
		<div class="btn" onclick="window.print();">Baixar</div>

	</div>
</div>

