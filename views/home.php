<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="assets/css/stylehomee.css">

<div>
	<div class="topo">
		<div class="topointerno">
			<div class=" buscar">
				<form method="GET">
					<input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Digite o código de barras ou o nome do produto" />
					<div class="buscarimg"><img src="assets/images/buscar.png" /></div>
				</form>
			</div>
			<div class="menu">
				<ul>
					<a href="<?php echo BASE_URL; ?>home/add"><li>Adicionar Produto</li></a>
					<a href="<?php echo BASE_URL; ?>relatorio"><li>Relatório</li></a>
				</ul>
			</div>
		</div>
	</div>
	<div class="tabela">
		<div class="tabelainterior">
			<table>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Preço Unit</th>
					<th>Qtd</th>
					<th>Ações</th>
				</tr>
				<?php foreach($list as $item): ?>
					<tr>
						<td><?php echo $item['cod']; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
						<td><?php echo $item['quantity']; ?></td>
						<td>
							<a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>	
	</div>
	<div class="rodape">
		Created by Marcelo (RGM:16738705) and Diego (RGM:16784375)
	</div>	
</div>

<script type="text/javascript">
document.getElementById("busca").focus();
</script>
