<?php

// This would normally access your database but is hard-coded here for demo's sake
function check_login($u,$p){
	$validCredentials = array(
		'pallen' => 'm$ftw',
		'tblee' => '0mGth3WeB!',
		'bourne' => 'bash_$',
		'edsger' => 'st1ll1l11lG0O2',
		'wgates' => '5il3M4X_m$4L',
		'hopper' => 'im4usn',
		'dknuth' => 'tek!tex',
		'ada' => 'wtf15b4b',
		'cmoore' => 'moreM00R3!',
		'jresig' => 'In0JS',
		'atanen' => 'minix!minix',
		'linus' => 'ilUvP3nGu1n5',
		'aturingv' => '1nfin1t3TAp3',
		'lwall' => 'oysters&camels',
		'thewoz' => '4daK1d5'
	);

	return array_key_exists($u,$validCredentials) && $validCredentials[$u] == $p;	
}

// This is meant to simulate your database query
function getQuestions($andAnswers = false){
	$questions = array(
		'42' => "Does P == NP?",
		'9' => "How Is Babby Formed?",
		'2' => "U WOT M8?",
		'16' => "Where in the World is Carmen Sandiego?"
	);
	
	if(!$andAnswers){return $questions;}
	
	$answers = array(
		2 => "Oi",
		42 => array( "Yes", "Of course", "Maybe"),
		16 => "California?"
	);
	return [$questions,$answers];
}

?>