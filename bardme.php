<?php

include_once __DIR__.'/randomizer.php';

class BardMe extends Randomizer {
	public $inspiration;
	public $insults;

	public function __construct() {
		$this->fetch_bard_lists();
	}

	public function fetch_bard_lists() {
		foreach ([ 'inspiration', 'insults' ] as $collection) {
			$raw = file_get_contents( __DIR__ . '/collections/'.$collection.'.txt');
			$this->$collection = explode("\n", $raw);
		}
	}

	public function get_line( $collection ) {
		// $line = $this->$collection[ mt_rand( 0, count( $this->$collection ) - 1 ) ];
		if ( $collection == 'insults' ) {
			$line = $this->insults[ mt_rand( 0, count( $this->insults ) - 1 ) ];
		} else if ( $collection == 'inspiration' ) {
			$line = $this->inspiration[ mt_rand( 0, count( $this->inspiration ) - 1 ) ];
		}
		if ( stripos( $line, ' | ' ) ) {
			$explode = explode( ' | ', $line );
			$line = [
				'text' => $explode[0],
				'source' => $explode[1],
			];
		} else {
			$line = [ 'text' => $line ];
		}
		return $line;
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