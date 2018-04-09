<link rel="stylesheet" type="text/css" href="assets/css/styleloginn.css" />
<div class="interiorlogin1">
	<div class="interiorlogin2">
		<form method="POST">
				Usuário<br/>
				<input type="text" name="number" autofocus maxlength="6" required /><br/><br/>

				Senha<br/>
				<input type="password" name="password" maxlength="6" required /><br/><br/>

				<input type="submit" value="Entrar" class="button" />
		</form>
	

	<?php if(!empty($msg)): ?>
	<h2 class="msg"><?php echo $msg; ?></h2>
	<?php endif; ?>
	</div>
</div>