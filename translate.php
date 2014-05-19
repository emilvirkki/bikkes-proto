<?php

$lang = $_SESSION['lang'];

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
	'You can open the bike lock using this app or with the code <strong>789294</strong> once the registration starts.' =>
		'Voit avata pyörän lukon tällä sovelluksella tai koodilla <strong>789294</strong>, kunhan varaus alkaa.',
	'Get the bike from <a href="#">@location</a> on <strong>@date</strong> at <strong>@time</strong>.' =>
		'Nouto: <a href="#">@location</a> <strong>@date</strong> klo <strong>@time</strong>.',
	'Return it to <a href="#">@location</a> on <strong>@date</strong> at <strong>@time</strong>.' =>
		'Palautus: <a href="#">@location</a> <strong>@date</strong> klo <strong>@time</strong>.',
	'Reservation complete' => 'Varaus vahvistettu',
	'Problems? Call 050 3398627.' => 'Ongelmissa soita 050 3398627.',
	'Today' => 'Tänään',
	'You can open the lock with the button below or with the code <strong>789294</strong>. You can choose any of the bikes present at the pit stop.'
		=> 'Voit avata lukon alla olevalla painikkeella tai koodilla <strong>789294</strong>. Voit valita minkä tahansa noutopaikalla olevista pyöristä.',
	'Is the bike damaged or missing? Call 050 3398627.' => 'Onko pyörä vahingoittunut tai puuttuu? Soita 050 3398627.',
	'Open lock' => 'Avaa lukko',
	'Close lock' => 'Lukitse',
	'Cancel reservation' => 'Peruuta varaus',
	'Are you sure you want to cancel?' => 'Haluatko varmasti peruuttaa varauksen?',
	'Bike locked. Thanks for using Bikkes!' => 'Pyörä on lukittu. Kiitos kun käytit Bikkesiä!',
	'Railway Station' => 'Rautatieasema',
	'Recycling center' => 'Kierrätyskeskus',
);

function t($raw_message, $replacements = array()) {
	global $messages;
	global $lang;
	$message = $messages[$raw_message];
	if(empty($message) || $lang == 'en') $message = $raw_message;
	return str_replace(array_keys($replacements), array_values($replacements), $message);
}