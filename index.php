<?php
require_once __DIR__ .'/bardme.php';
$bard = new BardMe();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Random quote</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<style type="text/css">
			*{
				font-size: 20pt;
				line-height: 2;
			}
		</style>
	</head>
	<body>
	<?php
		echo $bard->insult();
		echo $bard->inspire();
	?>
	<?php //echo '<pre>'.print_r($bard->insult(), true).'</pre>'; ?>
	<?php //echo '<pre>'.print_r($bard->inspire(), true).'</pre>'; ?>
	</body>
</html>