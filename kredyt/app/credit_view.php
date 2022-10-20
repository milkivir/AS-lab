<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/credit.php" method="post">
	<table>
	<tr>
	<td>
	<label for="id_x">Kwota kredytu: </label>
	</td>
	<td>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />
	</td>
	</tr>
	<tr>
	<td>
	<label for="id_z">Ile lat spłaty: </label>
	</td>
	<td>
	<input id="id_z" type="text" name="z" value="<?php if (isset($z)) print($z); ?>" /><br />
	</td>
	</tr>
	<tr>
	<td>
	<label for="id_y">Oprocentowanie: </label>
	</td>
	<td>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />
	</td>
	</tr>
	</table>
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna wysokość raty: '.$result; ?>
</div>
<?php } ?>

</body>
</html>