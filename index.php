<?php
	function hello_world($language = FALSE)
	{	
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

		if ($language AND isset($languages[$language]))
		{
			$use_language = $language;
		}
		else if ($language)
		{
			return "Sorry, I don't know the $language language!";
		}
		else
		{
			$use_language = array_rand($languages);
		}
		
		return "$languages[$use_language] world! (That was $use_language!)";
	}
	
	// A language I know
	echo hello_world('Hindi').'<br />';
	
	// A language I don't know
	echo hello_world('Norwegian').'<br />';
	
	// A random language
	echo hello_world().'<br />';
?>