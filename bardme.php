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