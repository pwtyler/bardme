<?php
class Randomizer {
	public function flip_a_coin() {
		/* http://stackoverflow.com/a/9153969 */
		if ( time() & 1 ) {
		  return 1;
		} else {
		  return 0;
		}
	}

	public function choose_one( $array = array() ) {
		return $array[ mt_rand( 0, count( $array ) - 1 ) ];
	}
}