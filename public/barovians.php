<?php
require_once dirname( __DIR__ ) .'/barovians.php';
$barovians = new Barovians();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Names for all you meet in Barovia</title>
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
		<?php echo $barovians->generate('male'); ?>	
		<?php echo $barovians->generate('female'); ?>	
	</body>
</html>