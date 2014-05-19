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
	'The reservation must be cancelled at least three hours before the start or the fee will be charged.' => 'Varaus on peruutettava vähintään kolme tuntia ennen sen alkua, tai se veloitetaan kokonaan luottokortiltasi.',
	'Damages and fines from late returns are automatically charged from your credit card.' => 'Vahingot ja myöhästymissakot veloitetaan automaattisesti luottokortiltasi.',
	'See <a href="#">pricing</a> for details.' => 'Katso lisätiedot <a href="#">hinnastosta</a>.',
);

function t($raw_message, $replacements = array()) {
	global $messages;
	global $lang;
	$message = $messages[$raw_message];
	if(empty($message) || $lang == 'en') $message = $raw_message;
	return str_replace(array_keys($replacements), array_values($replacements), $message);
}