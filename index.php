<?php
	// Now I just want to see what happens when I have two public
	// branches on github... boing boing

	function hello_world($language = FALSE)
	{	
		$hello = array(
			'English' => 'Hello',
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
			'English' => 'Goodbye',
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

		if ($language AND isset($hello[$language]))
		{
			$use_language = $language;
		}
		else if ($language)
		{
			return "Sorry, I don't know the $language language!";
		}
		else
		{
			$use_language = array_rand($hello);
		}
		
		return "$hello[$use_language] world! $goodbye[$use_language] world! (That was $use_language!)";
	}
	
	// A language I know
	echo hello_world('Hindi').'<br />';
	
	// A language I don't know
	echo hello_world('Norwegian').'<br />';
	
	// A random language
	echo hello_world().'<br />';
?>