<?php
	$languages = array(
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

	$random_language = array_rand($languages);
	
	echo "$languages[$random_language] world! (That was $random_language!)";
?>