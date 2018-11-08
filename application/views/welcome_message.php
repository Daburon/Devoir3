<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="JQuery\jquery-3.1.1.js"></script>
	<script src="JS\mesFonctions.js"></script>
	<script>




	</script>
</head>
<body>
Votre Nom :
<select id="user" onchange="AfficherRegion(this.value)">
<?php
    foreach ($lesNoms as $unNom)
    {
?>
    <option name="Nom" value="<?php echo $unNom->nomUser ; ?>" ><?php echo $unNom->statutUser ; ?>
<?php
    }
?>
</select>
<br><br>
    <div id="divRegion"></div><br><br>
    <div id="divVille"></div>
</body>
</html>