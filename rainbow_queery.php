<?php
/*
Plugin Name: Rainbow Queery
Plugin URI: https://github.com/jolarti/LGBT-quotes-wordpress-plugin
Description: A queer plugin spin-off of the Hello Dolly plug-in that displays inspirational, humorous or activist quotes for people of all LGBTQ rainbow diversities at the top of your admin screen.
Version: 1.1
Author: Jiro Ghianni
Author URI: http://www.jirosworld.com/
License: GPLv2
*/

function rainbow_queery_get_quote() {
	/** These are the available quotes */
	$qquotes = "'We are all born naked, everything else is drag.' -RuPaul
I think no question containing 'either/or' deserves a serious answer, and that includes the question of gender. -Kate Bornstein
'Is it a boy or a girl? -'We don’t know; it hasn’t told us yet.'
I don't mind straight people as long as they act gay in public. -Anonymous
'What is straight? A line can be straight, or a street, but the human heart, oh, no, it's curved like a road through mountains.' -Tennessee Williams
If homosexuality is a disease, let's call in queer to work. 'Hello, can't work today, still queer.' -Stephanie Strong
'Being queer is like being on a lifetime assignment as a secret agent in some foreign country.'' -Noretta Koertge
'Women who seek to be equal with men lack ambition.' -Marilyn Monroe
'Be yourself; everyone else is already taken.' -Oscar Wilde
'If you are against gay marriage then just don't marry a gay dude.' -Bianca del Rio
'You only live once, but if you do it right, once is enough.' -Mae West
Why do people say 'grow some balls'? Balls are weak and sensitive. If you wanna be tough, grow a vagina. Those things can take a pounding! -Betty White
'Be who you are and say what you feel, because those who mind don't matter and those who matter don't mind.' -Dr. Seuss
Dip me in honey and throw me to the lesbians!
'I'd rather be black than gay because when you're black you don't have to tell your mother.' -Charles Pierce
'Bisexuality is our best hope of escape from the animosities and false polarities of the current sex wars.' -Camille Paglia
My mother said to me, 'Why do you have to call yourself a dyke? Why can't you be a nice lesbian?' 'Because I'm not a nice lesbian, I'm a big dyke.' -Lea Delaria
'Rights are won only by those who make their voices heard.' -Harvey Milk
'Openness may not completely disarm prejudice, but it’s a good place to start.' -Jason Collins
'If you can't love yourself, how in the hell are you gonna love somebody else?' -RuPaul";

	// Split all into lines
	$qquotes = explode( "\n", $qquotes );

	// Randomly choose a line
	return wptexturize( $qquotes[ mt_rand( 0, count( $qquotes ) - 1 ) ] );
}

// Echoes the chosen line, we'll position it later
function say_queery() {
	$chosen = rainbow_queery_get_quote();
	echo "<p id='LGBTQ'><a href=''>$chosen</a></p>";
}

// Set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'say_queery' );

// CSS to position the paragraph
function lgbtq_css() {
	// This makes sure that positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
p#LGBTQ>a {
	display: inline-block;
	width: 100%;
	color: white;
	text-decoration: none;
}
#LGBTQ {
	float: right;
    padding: 10px;
    margin: 0 1em 0 0;
    line-height: 1.7;
	font-size: 12px;
	font-weight: 600;
	color: white;
	background-color: #ff3399;
	border-radius: 1em;
	z-index: auto;
	cursor: pointer;
	opacity: 1;
	-webkit-border-radius: 1em;
	border-radius: 1em;
	-webkit-box-shadow: 3px 0 0 rgb(217, 31, 38),
	6px 0 0 rgb(226, 91, 14),
	9px 0 0 rgb(245, 221, 8),
	12px 0 0 rgb(5, 148, 68),
	15px 0 0 rgb(2, 135, 206),
	18px 0 0 rgb(4, 77, 145),
	21px 0 0 rgb(42, 21, 113);
	box-shadow: 3px 0 0 rgb(217, 31, 38),
	6px 0 0 rgb(226, 91, 14),
	9px 0 0 rgb(245, 221, 8),
	12px 0 0 rgb(5, 148, 68),
	15px 0 0 rgb(2, 135, 206),
	18px 0 0 rgb(4, 77, 145),
	21px 0 0 rgb(42, 21, 113);
	-webkit-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-moz-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-o-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-webkit-transform: none;
	transform: none;
	-webkit-transform-origin: 50% 50% 0;
	transform-origin: 50% 50% 0;
    width: 30%;
    -webkit-transition: width 2s ease-in-out;
    -moz-transition: width 2s ease-in-out;
    -o-transition: width 2s ease-in-out;
    transition: width 2s ease-in-out;
}
#LGBTQ:hover, #LGBTQ:focus {
	z-index: auto;
	cursor: pointer;
	opacity: 1;
	-webkit-border-radius: 1em;
	border-radius: 1em;
	-webkit-box-shadow: -3px 0 0 rgb(217, 31, 38),
	-6px 0 0 rgb(226, 91, 14),
	-9px 0 0 rgb(245, 221, 8),
	-12px 0 0 rgb(5, 148, 68),
	-15px 0 0 rgb(2, 135, 206),
	-18px 0 0 rgb(4, 77, 145),
	-21px 0 0 rgb(42, 21, 113);
	box-shadow: -3px 0 0 rgb(217, 31, 38),
	-6px 0 0 rgb(226, 91, 14),
	-9px 0 0 rgb(245, 221, 8),
	-12px 0 0 rgb(5, 148, 68),
	-15px 0 0 rgb(2, 135, 206),
	-18px 0 0 rgb(4, 77, 145),
	-21px 0 0 rgb(42, 21, 113);
	-webkit-transition: all 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-moz-transition: all 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-o-transition: all 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	transition: all 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
	-webkit-transform: none;
	transform: none;
	-webkit-transform-origin: 50% 50% 0;
	transform-origin: 50% 50% 0;
    width: 50%;
}
	</style>
	";
}

add_action( 'admin_head', 'lgbtq_css' );

?>