<?php require_once  'cabecalho.php'; ?>
<form action="livro.php" method="POST">
	<h1>Comparação de Livros</h1>
	<p>Digite o 1&ordm; autor: </p>
	<p><imput type="text" name="titulo1"
		size="50" maxlength="100"
		pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1-100}"
		required></p>
		<p>digite o titulo do 1&ordm;:</p>
		<p><input type="text" name="titulo1"
			size="50" maxlength="100"
			pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1-100}"
			requiered></p>
		<p>Digite o n&ordm; de páginas:</p>
		<p><input type="number" name="paginas1"
			min="1" step="1" required></p>

			<p>Digite o 2&ordm; autor:</p>
	<p><imput type="text" name="autor2"
		size="50" maxlength="100"
		pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1-100}"
		required></p>
		<p>digite o titulo do 2&ordm;:</p>
		<p><input type="text" name="titulo2"
			size="50" maxlength="100"
			pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1-100}"
			requiered></p>
		<p>Digite o n&ordm; de páginas:</p>
		<p><input type="number" name="paginas2"
			min="1" step="1" required></p>
</form>