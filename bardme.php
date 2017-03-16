<?php
class BardMe {
	public $inspiration;
	public $insults;

	public function __construct() {
		foreach ([ 'inspiration', 'insults' ] as $collection) {
			$raw = file_get_contents(__DIR__.'/'.$collection.'.txt');
			$this->$collection = explode("\n", $raw);
		}
	}

	public function get_line( $collection ) {
		if ($collection == 'insults') {
			$insult = $this->insults[ mt_rand( 0, count( $this->insults ) - 1 ) ];
		} else if ($collection == 'inspiration') {
			$insult = $this->inspiration[ mt_rand( 0, count( $this->inspiration ) - 1 ) ];
		}

		if (stripos($insult, ' | ')) {
			$explode = explode( ' | ', $insult );
			$insult = array(
				'text' => $explode[0],
				'source' => $explode[1],
			);
		} else {
			$insult = array( 'text' => $insult );
		}

		return $insult;
		return $this->$collection[ mt_rand( 0, count( $this->$collection ) - 1 ) ];
	}

	public function format( $quote, $type ) {
	?>
		<blockquote class="text-center">
			<h1><?php echo ucfirst( $type ); ?>!</h1>
			<p><?php echo $quote['text']; ?></p>
			<?php if ( ! empty( $quote['source'] ) ) { ?>
			<footer><?php echo $quote['source'] ?></footer>
			<?php } ?>
		</blockquote>
	<?php
	}

	public function insult() {
		$insult = $this->get_line('insults');
		return $this->format( $insult, 'insulting' );
	}

	public function inspire() {
		$inspiration = $this->get_line('inspiration');
		return $this->format( $inspiration, 'inspiring' );
	}
}

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