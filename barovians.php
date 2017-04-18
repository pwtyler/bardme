<?php
include_once __DIR__.'/randomizer.php';

class Barovians extends Randomizer {
	public $familia = array();
	public $ima = array();

	public function __construct() {
		foreach (['familia', 'ima'] as $name_element) {
			$this->$name_element = json_decode(file_get_contents(__DIR__.'/collections/barovia/'.$name_element.'.json'), true);
		}
	}

	public function generate( $gender='' ) {
		if ( empty( $gender ) ) {
			$gender = ( $this->flip_a_coin() ? 'male':'female' );
		}
		$first_name = $this->choose_one($this->ima[$gender]);
		$last_name = $this->get_last_name( $gender );
		$full_name = ucfirst($first_name).' '.ucfirst($last_name);
		return $this->format( [ 'text' => $full_name ], $gender );
	}

	public function get_last_name( $gender ) {
		$last_names = $this->familia['neutral'];
		$name_endings = array(
			['male' => 'ovich', 'female' => 'ovna'],
			['male' => 'ov',    'female' => 'ova' ],
		);
		foreach ($name_endings as $name_ending) {
			foreach ( $this->familia[$name_ending['male']] as $name ) {
				$last_names[] = $name . $name_ending[$gender];
			}
		}
		return $this->choose_one($last_names);
	}
}