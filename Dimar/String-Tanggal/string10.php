<form action="" method="post">
	
	Input teks di sini: <br/>
	<textarea name="input" cols="40" rows="4"></textarea><br/>
	<input type="submit" name="Submit" value="Proses">

</form>

<?php 

	if (isset($_POST['Submit'])) {
		$txt = $_POST['input'];
		echo "Tanpa nl2br() : <br/>$txt<br><br>";
		echo "Dengan nl2br();<br/>" .nl2br($txt);
	}


 ?>