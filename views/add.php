<link rel="stylesheet" type="text/css" href="../assets/css/styleprodutoo.css" />
<div>
	<div class="h1">
			<h1>Adicionar Produto</h1>
		</div>
	<div class="interior">
		<div class="formulario">
			<form method="POST" class="form">
				<div class="itens">
					Código de Barras<br/>
					<input type="text" name="cod" required /><br/><br/>

					Nome do Produto<br/>
					<input type="text" name="name" required /><br/><br/>

					Preço do Produto<br/>
					<input type="text" name="price" required /><br/><br/>

					Quantidade<br/>
					<input type="text" name="quantity" required /><br/><br/>

					Qtd. Mínima<br/>
					<input type="text" name="min_quantity" required /><br/><br/>
				</div>
				<div class="botao1">
					<input type="submit" value="Salvar" />
				</div>
				<div class="botao2"><a href="..">Voltar</a></div>
			</form>
		</div>
	</div>
</div>	