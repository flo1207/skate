<!DOCTYPE html>
<html>
      <meta charset="UTF-8"/>
</html>
<?php
	$pseudo = $_POST['pseudo'];
	$age = $_POST['age'];
	$mail = $_POST['email'];
	$avis = $_POST['avis'];
	$f= fopen("Coordonnees.txt","a");
	fwrite($f,$pseudo."\n");
	fwrite($f,$age."\n");
	fwrite($f,$mail."\n");
	$isTouch = isset($_POST['beaucoup']);
	if ($isTouch=='True')
	{
		$beaucoup = $_POST['beaucoup'];
		fwrite($f,$beaucoup."\n");
	}
	else
	{
		$isTouch2 = isset($_POST['sans']);
		if ($isTouch2=='True')
		{
			$sans = $_POST['sans'];
			fwrite($f,$sans."\n");
		}
		else
		{
			$pas = $_POST['pas'];
			fwrite($f,$pas."\n");
		}
	}
	$isTouch3=isset($_POST['oui']);
	if ($isTouch3=='True')
		{
			$oui = $_POST['oui'];
			fwrite($f,$oui."\n");
		}
	else
		{
			$non = $_POST['non'];
			fwrite($f,$non."\n");
		}
	fwrite($f,$avis."\n");
	fclose($f);
	echo 'Vos coordonnées ont été envoyées';
?>
<body>
<input type="button" value="Fermer" onClick="window.close()">
</body>