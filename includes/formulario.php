<?php
$url = "http://127.0.0.1/site/";
?>



<section class="formulario">
		<div class="container">
			<h2>Um orçamento ou alguma dúvida?</h2>
				<form method="post" action="<?=$url?>includes/process.php">
				<input type="text" name="nome" placeholder="Nome..." required>
				<input type="text" name="email" placeholder="E-mail..." required>
				<input type="text" name="telefone" placeholder="Telefone..." required>
				<input type="text" name="Whatsapp" placeholder="Whatsapp..." required>
				<textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
				<input type="submit"  name="acao" value="Enviar!">
			</form>
		</div>
	</section>
