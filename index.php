<?php
	function hello_world($language = FALSE)
	{	
		$hello = array(
			'English'          => 'Hello',
			'Japanese'         => 'Konnichiwa',
			'French'           => 'Bonjour',
			'German'           => 'Hallo',
			'Italian'          => 'Ciao',
			'Spanish'          => 'Hola',
			'Mandarin Chinese' => 'Ni Hao',
			'Danish'           => 'Hej',
			'Malay'            => 'Selamat pagi',
			'Maori'            => 'Kia ora',
			'Hawaiian'         => 'Aloha',
			'Hindi'            => 'Namaste',
			'Arabic'           => "As-salaam 'alaikum",
			);
			
		$goodbye = array(
			'English'          => 'Goodbye',
			'Japanese'         => 'Sayounara',
			'French'           => 'Au reviour',
			'German'           => 'Auf wiedersehen',
			'Italian'          => 'Arrivederci',
			'Spanish'          => 'Adios',
			'Mandarin Chinese' => 'Baibai',
			'Danish'           => 'Farvel',
			'Malay'            => 'Selamat tinggal',
			'Maori'            => 'E noho raa',
			'Hawaiian'         => 'A hui ho',
			'Hindi'            => 'Namaste',
			'Arabic'           => 'Ilaa al-liqaa',
			);

		if ($language AND ! isset($hello[$language]))
		{
			return "Sorry, I don't know the $language language!";
		}
		else if ( ! $language)
		{
			$language = array_rand($hello);
		}
		
		return "$hello[$language] world! $goodbye[$language] world! (That was $language!)";
	}
	
	// A language I know
	echo hello_world('Hindi'), '<br />', PHP_EOL;
	
	// A language I don't know
	echo hello_world('Norwegian'), '<br />', PHP_EOL;
	
	// A random language
	echo hello_world(), '<br />';
?>