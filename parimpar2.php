<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero=$_GET['numero'];
	if($numero%2 ==0) {
		echo"<p>$numero é Par!</p>";
	}else{
		echo"<p>$numero é Impár!</p>";
	}
	echo "<div><a href='parimpar.php' class='link'>
	Outro numero?</a></div>";
	
		
?>
</section>
</body>
</hmtl>