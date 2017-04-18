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
		<title>When Your Bard Needs to Mock and/or Inspire</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<style type="text/css">
			*{
				font-size: 20pt;
				line-height: 20;
			}
		</style>
	</head>
	<body>
		<blockquote class="text-center">
			<h1>
				<?php echo $barovians->generate('male'); ?>	
			</h1>
			<h1>
				<?php echo $barovians->generate('female'); ?>	
			</h1>
		</blockquote>
	</body>
</html>