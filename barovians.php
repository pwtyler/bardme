<?php
include_once __DIR__.'/randomizer.php';

class Barovians extends Randomizer {
	public $familia = array();
	public $ima = array();

	public function __construct() {
		$this->familia = json_decode(file_get_contents(__DIR__.'/collections/barovia/familia.json'), true);
		$this->ima = json_decode(file_get_contents(__DIR__.'/collections/barovia/ima.json'), true);
	}

	public function generate( $gender='' ) {
		if ( empty( $gender ) ) {
			$gender = ( $this->flip_a_coin() ? 'male':'female' );
		}
		$first_name = $this->choose_one($this->ima[$gender]);
		$last_name = $this->get_last_name( $gender );
		return ucfirst($first_name).' '.ucfirst($last_name);
	}

	public function get_last_name( $gender ) {
		$last_names = $this->familia['neutral'];
		foreach ( $this->familia['ov'] as $name ) {
			if ( $gender == 'male' ) {
				$last_names[] = $name.'ov';
			} else {
				$last_names[] = $name.'ova';
			}
		}
		foreach ( $this->familia['ovich'] as $name ) {
			if ( $gender == 'male' ) {
				$last_names[] = $name.'ovich';
			} else {
				$last_names[] = $name.'ovna';
			}
		}
		return $this->choose_one($last_names);
	}
}