<?php
require_once dirname( __DIR__ ) .'/bardme.php';
$bard = new BardMe();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>When Your Bard Needs to Mock and/or Inspire</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bardme.css">
	</head>
	<body>
	<?php
		echo $bard->insult();
		echo $bard->inspire();
	?>
	</body>
</html>