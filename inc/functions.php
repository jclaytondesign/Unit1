<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes[] = [
	'quote' => 'Science without religion is lame, religion without science is blind.',
	'source' => 'Albert Einstein',
	'citation' => 'Science, Philosophy and Religion',
	'year' => '1941',
];

$quotes[] = [
'quote' => 'Life moves pretty fast. If you don’t stop and look around once in a while, you could miss it.',
'source' => 'Ferris Bueller',
'citation' => 'Ferris Bueller’s Day Off',
'year' => '1986',
];

$quotes[] = [
'quote' => 'Act as if what you do makes a difference. It does.',
'source' => 'William James',
'citation' => '',
'year' => '',
];

$quotes[] = [
'quote' => 'Learn everything you can. Anytime you can. From anyone you can -- there will always come a time you will be grateful you did.',
'source' => 'Sarah Caldwell',
'citation' => '',
'year' => '',
];

$quotes[] = [
'quote' => 'The next time your mind wanders, follow it around for a while.',
'source' => 'Jessica Masterson',
'citation' => '',
'year' => '',
];

$quotes[] = [
'quote' => 'Do or do not. There is no try.',
'source' => 'Yoda',
'citation' => 'Empire Strikes Back',
'year' => '1980',
];

$quotes[] = [
'quote' => 'Happiness can be found even in the darkest of times, if one only remembers to turn on the light.',
'source' => 'Dumbledore',
'citation' => 'Harry Potter and the Prisoner of Azkaban',
'year' => '1999',
];


// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote() {

// bring in quotes variable, count number of array items function
	global $quotes;
	$max = count($quotes);

// get random number between the range of the item available
	$quoteRandomKey = rand(0,$max);

//return a random key number within the range
	return $quoteRandomKey;
}

// Create the printQuote function and name it printQuote

//function printQuote(){
//	getRandomQuote();
////output html required
//	echo '<p class="quote">' . $quotes[$quoteRandomKey,'quote'] . '</p>';
//	echo '<p class="source">' .	$quotes[$quoteRandomKey,'source'] .
//		'<span class="citation">' .  $quotes[$quoteRandomKey,'citation'] .
//		'</span> <span class="year">' .  $quotes[$quoteRandomKey,'year'] . '</span> </p>';
//}
