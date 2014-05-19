<?php

$lang = 'fi';

$messages = array(
	'Reserve a Bikkes' => 'Varaa Bikkes',
	'My Reservations' => 'Omat varaukset',
	'Reserve' => 'Varaa',
	'Get it from...' => 'Pyörän nouto',
	'Return it to...' => 'Pyörän palautus',
	'Choose location...' => 'Valitse sijainti...',
	'At:' => 'Milloin:',
	'Credit card:' => 'Luottokortti:',
	'Expires:' => 'Vanhenee:',
	'I accept the <a href="#">lending terms</a>' => 'Hyväksyn <a href="#">vuokrausehdot</a>',
	'Pay' => 'Maksa',
	'Cancel' => 'Peruuta',
	'Confirm reservation' => 'Vahvista varaus',
);

function t($raw_message, $replacements = array()) {
	global $messages;
	global $lang;
	$message = $messages[$raw_message];
	if(empty($message) || $lang == 'en') $message = $raw_message;
	return str_replace(array_keys($replacements), array_values($replacements), $message);
}