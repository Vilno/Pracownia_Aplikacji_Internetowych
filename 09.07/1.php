<html>
<head>
	<style>
		p{color:red;}
	</style>
</head>
<body>
	<?php
	echo "<p>Iwo Wiliński</p>";
	
	$wiek = 19;
	
	echo "Mam ".$wiek." lat";
	
	echo "<h2>Tekst w nagłówku</h2>"
	
	?>
	
	<form method="post" action="">
		<input type='text' name='t'>
		<input type='submit' value='(nie)Potwierdzam'>
	</form>
	
	<?php
	if(isset($_POST['t']) && !empty($_POST['t'])){
		$tekst = $_POST['t'];
		echo "Wpisałeś: ".$tekst; 
	}
	?>
	
	<h2>Tekst w nagłówku</h2>
	
</body>
</html>