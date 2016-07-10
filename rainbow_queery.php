<?php
/*
Plugin Name: Rainbow Queery
Plugin URI: https://github.com/jolarti/LGBT-quotes-wordpress-plugin
Description: A queer plugin spin-off of the Hello Dolly plug-in that displays inspirational, humorous or activist quotes for people of all LGBTQ rainbow diversities at the top of your admin screen.
Version: 1.0
Author: Jiro Ghianni
Author URI: http://www.jirosworld.com/
License: GPLv2
*/

function rainbow_queery_get_quote() {
	/** These are the available quotes */
	$qquotes = "'We are all born naked, everything else is drag.' -RuPaul
I think no question containing 'either/or' deserves a serious answer, and that includes the question of gender. -Kate Bornstein
'Is it a boy or a girl? -'We don’t know; it hasn’t told us yet.'
I don't mind straight people as long as they act gay in public.
'What is straight? A line can be straight, or a street, but the human heart, oh, no, it's curved like a road through mountains.' -Tennessee Williams
If homosexuality is a disease, let's call in queer to work. 'Hello, can't work today, still queer.' -Stephanie Strong
'Being queer is like being on a lifetime assignment as a secret agent in some foreign country.'' -Noretta Koertge
'Women who seek to be equal with men lack ambition.' -Marilyn Monroe
'Be yourself; everyone else is already taken.' -Oscar Wilde
'You only live once, but if you do it right, once is enough.' -Mae West
Why do people say 'grow some balls'? Balls are weak and sensitive. If you wanna be tough, grow a vagina. Those things can take a pounding! -Betty White
'Be who you are and say what you feel, because those who mind don't matter and those who matter don't mind.' -Dr. Seuss
Dip me in honey and throw me to the lesbians!
'I'd rather be black than gay because when you're black you don't have to tell your mother.' -Charles Pierce
'Bisexuality is our best hope of escape from the animosities and false polarities of the current sex wars.' -Camille Paglia
My mother said to me, 'Why do you have to call yourself a dyke? Why can't you be a nice lesbian?' 'Because I'm not a nice lesbian, I'm a big dyke.' -Lea Delaria
'Rights are won only by those who make their voices heard.' -Harvey Milk
'If you can't love yourself, how in tha hell are you gonna love somebody else?' -RuPaul";

	// Split all into lines
	$qquotes = explode( "\n", $qquotes );

	// Randomly choose a line
	return wptexturize( $qquotes[ mt_rand( 0, count( $qquotes ) - 1 ) ] );
}

// Echoes the chosen line, we'll position it later
function say_queery() {
	$chosen = rainbow_queery_get_quote();
	echo "<p id='LGBTQ'>$chosen</p>";
}

// Set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'say_queery' );

// CSS to position the paragraph
function lgbtq_css() {
	// This makes sure that positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#LGBTQ {
		float: $x;
		padding: 8px;		
		margin: 0;
		font-size: 12px;
		background-color: #ffccff;
		border-radius: 1em;
		box-shadow: 1px 1px 8px 7px pink inset;
		-moz-box-shadow: 1px 1px 8px 7px pink inset;
		-webkit-box-shadow: 1px 1px 8px 7px pink inset;
	}
	</style>
	";
}

add_action( 'admin_head', 'lgbtq_css' );

?>
