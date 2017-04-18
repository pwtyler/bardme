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
}