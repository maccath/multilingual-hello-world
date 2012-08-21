<?php
	$hello = array(
		'Japanese' => 'Konnichiwa',
		'French' => 'Bonjour',
		'German' => 'Hallo',
		'Italian' => 'Ciao',
		'Spanish' => 'Hola',
		'Mandarin Chinese' => 'Ni Hao',
		'Danish' => 'Hej',
		'Malay' => 'Selamat pagi',
		'Maori' => 'Kia ora',
		'Hawaiian' => 'Aloha',
		'Hindi' => 'Namaste',
		'Arabic' => "As-salaam 'alaikum"
		);
		
	$goodbye = array(
		'Japanese' => 'Sayounara',
		'French' => 'Au reviour',
		'German' => 'Auf wiedersehen',
		'Italian' => 'Arrivederci',
		'Spanish' => 'Adios',
		'Mandarin Chinese' => 'Baibai',
		'Danish' => 'Farvel',
		'Malay' => 'Selamat tinggal',
		'Maori' => 'E noho raa',
		'Hawaiian' => 'A hui ho',
		'Hindi' => 'Namaste',
		'Arabic' => "Ilaa al-liqaa"
		);

	$random_language = array_rand($hello);
	
	echo "$hello[$random_language] world! $goodbye[$random_language] world! (That was $random_language!)<br />";
?>