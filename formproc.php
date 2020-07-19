<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0  Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type"  content="text/html; charset=iso-8859-1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Wai dela Cruz for SCAD ITGM 727 class">

    <title>Signs and Stones</title>

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="styles/styles.css?v=20200717" rel="stylesheet">
</head>
<body>

	<div class="container">
  <div class="wrapper">
	<div class="logo"></div>
	<div class="content">

  <?php 

  // Field variables
  $fullName = $_POST['fullName'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  // $year = $_POST['year']; // Decided to remove the year since it's irrelevant to the Astrological sign

  $formFilled = TRUE; // Validates that all fields in the form are filled
  
	  if((empty($_POST['fullName'])) || (empty($_POST['month'])) || (empty($_POST['day']))) {
	  
	    echo "<p>You did not fill in all fields. Please make sure you state your name and birthday.</p>"; 
	    
	    $formFilled = FALSE; // If any of the fields are not filled, value is False and the error message appears
	  }

	if ($formFilled) { // If True, code below will execute

		function sign ($month, $day) { // Month and day parameters 
			
			$sign = ""; 

				if 			( ($month == 1 && $day > 19) || ($month == 2 && $day < 19) ) { $sign = "Aquarius"; } 
				elseif	( ($month == 2 && $day > 18) || ($month == 3 && $day < 21) ) { $sign = "Pisces"; } 
				elseif  ( ($month == 3 && $day > 20) || ($month == 4 && $day < 20) ) { $sign = "Aries"; } 
				elseif 	( ($month == 4 && $day > 19) || ($month == 5 && $day < 21) ) { $sign = "Taurus"; } 
				elseif 	( ($month == 5 && $day > 20) || ($month == 6 && $day < 21) ) { $sign = "Gemini"; } 
				elseif 	( ($month == 6 && $day > 20) || ($month == 7 && $day < 23) ) { $sign = "Cancer"; } 
				elseif 	( ($month == 7 && $day > 22) || ($month == 8 && $day < 23) ) { $sign = "Leo"; } 
				elseif 	( ($month == 8 && $day > 22) || ($month == 9 && $day < 23) ) { $sign = "Virgo"; } 
				elseif 	( ($month == 9 && $day > 22) || ($month == 10 && $day < 23) ) { $sign = "Libra"; } 
				elseif 	( ($month == 10 && $day > 22) || ($month == 11 && $day < 22) ) { $sign = "Scorpio"; } 
				elseif 	( ($month == 11 && $day > 21) || ($month == 12 && $day < 22) ) { $sign = "Sagittarius"; } 
				elseif 	( ($month == 12 && $day > 21) || ($month == 1 && $day < 20) ) { $sign = "Capricorn"; } 
	
			return $sign; // If statements are used to return $sign value  
		}

		function stone ($month, $day) {
			
			$stone = "";

				if     	( ($month == 1) ) { $stone = "Garnet"; } 
				elseif 	( ($month == 2) ) { $stone = "Amethyst"; } 
				elseif 	( ($month == 3) ) { $stone = "Aquamarine"; } 
				elseif 	( ($month == 4) ) { $stone = "Diamond"; } 
				elseif 	( ($month == 5) ) { $stone = "Emerald"; } 
				elseif 	( ($month == 6) ) { $stone = "Pearl"; } 
				elseif 	( ($month == 7) ) { $stone = "Ruby"; } 
				elseif 	( ($month == 8) ) { $stone = "Peridot"; } 
				elseif 	( ($month == 9) ) { $stone = "Sapphire"; } 
				elseif 	( ($month == 10) ) { $stone = "Opal"; } 
				elseif 	( ($month == 11) ) { $stone = "Topaz"; } 
				elseif 	( ($month == 12) ) { $stone = "Turquoise"; } 

			return $stone; // If statements are used to return $stone value  
		}

		echo ("<div class='name'>Hello $fullName!</div>");
		echo ("<div class='label'>Your astrological sign is </div><div class='data'>");
		echo sign ($month, $day);
		echo "</div>";

		switch (sign ($month, $day)) { // Switch statements are used to execute statements depending on case value
			case "Aquarius": // Case for when sign is Aquarius
				echo "<p>Aquarians are intelligent, intellectual, innovative, experimental, and love meeting and mixing with others. They can be friends with anyone. Aquarius birthstones tend to enhance these qualities.</p>";  
				break;
			case "Pisces": // Case for when sign is Pisces
				echo "<p>Pisces are selfless and noted for their empathy. They are intuitive, artistic, gentle souls who are always willing to help others, without hoping to get anything back. The birthstones listed mostly heighten Pisces' intuitive and spiritual natures.</p>";  
				break;
			case "Aries":  // Case for when sign is Aries
				echo "<p>Aries individuals are energetic and proactive. Ruled by Mars, they are disposed to action and dynamic endeavors. The birthstones for Aries support their dynamic and vigorous nature as well as stabilize the abundant energy of an Aries born person.</p>";  
				break;
			case "Taurus": // Case for when sign is Taurus
				echo "<p>People born under the sign of Taurus are shrewd individuals and hard workers who are known to be quite practical and grounded in the material world. Venus, the Goddess of Love, rules Taurus. The astrological birthstones for Taurus infuse emotional wellness, love, wellbeing, luck, and abundance into their earthy nature.</p>";  
				break;
			case "Gemini": // Case for when sign is Gemini
				echo "<p>Gemini individuals are friendly and articulate. Ruled by Mercury, the planet of communication and intellect, the astrological birthstones for Gemini support their highly intellectual nature, enhance their ability to communicate, and support emotional strength.</p>";  
				break;
			case "Cancer": // Case for when sign is Cancer
				echo "<p>Cancer people are gentle and caring. Ruled by the Moon, they are sensitive to their emotional environment and tenderly nurture the people that surround them. Cancer birthstones bring emotional serenity to and strengthen the impressionable Cancer individual's emotional nature.</p>";  
				break;
			case "Leo": // Case for when sign is Leo
				echo "<p>People born under the sign of Leo are powerful and endowed with the biggest personalities and strongest wills of the Zodiac. The astrological birthstones for Leo keep the strength of the mighty Leo under control as well as reinforcing and bolstering the Leo spirit.</p>";  
				break;
			case "Virgo": // Case for when sign is Virgo
				echo "<p>Virgos, ruled by Mercury, are analytical, organized, smart, and pay attention to the smallest detail. Virgo birthstones complement and balance Virgo's earthy nature with emotional and spiritual strength.</p>";  
				break;
			case "Libra": // Case for when sign is Libra
				echo "<p>Libras are intellectual and friendly. Ruled by Venus, the planet of love, their mission in life is to create peace and harmony. The Libra birthstones will help these consolatory people face the challenges of life and give them a strength of purpose.</p>";  
				break;
			case "Scorpio": // Case for when sign is Scorpio
				echo "<p>Scorpios are emotionally intense, psychic people who absorb the surrounding energy. These Scorpio birthstones act mainly to soak up the negative energy Scorpios draw to themselves. They also to bring joy to their lives.</p>";  
				break;
			case "Sagittarius": // Case for when sign is Sagittarius
				echo "<p>People born under the sign of Sagittarius are the wisdom seekers and teachers of the zodiac. Ruled by Jupiter, they are joyful, highly inquisitive, and prone to excess. These birthstones give Sagittarians the courage to speak the truth and provide their curious nature more depth of thought.</p>";  
				break;
			case "Capricorn": // Case for when sign is Capricorn
				echo "<p>Capricorns are stoic, practical achievers and hard workers ruled by Saturn, the taskmaster of the zodiac. The Capricorn birthstones mainly ground, support and give strength to Capricorn's ambitious nature.</p>";  
				break;
			default:
				echo "";  
				break;
		}

		echo ("<div class='label'>Your birthstone is </div><div class='data'>");
		echo stone ($month, $day);
		echo "</div>";

		switch (stone ($month, $day)) { // Switch statements are used to execute statements depending on case value
			case "Garnet":  // Case for when birth month is January and stone is Garnet
				echo "<p>The January birthstone, garnet, is thought to keep the wearer safe during travel. The word 'garnet' is derived from a term that means 'seed', because the gem resembles the color and shape of a pomegranate seed.</p>";  
				break;
			case "Amethyst": // Case for when birth month is February and stone is Amethyst
				echo "<p>The February birthstone, amethyst, is said to strengthen relationships and give its wearer courage. At one time, only royalty could wear the gem. Ancient Greeks thought that the amethyst guarded against intoxication. In fact, 'amethyst' comes from amethystos, a Greek word meaning 'sober.</p>";  
				break;
			case "Aquamarine": // Case for when birth month is March and stone is Aquamarine
				echo "<p>The March birthstone, aquamarine, was thought to cure heart, liver, and stomach diseases—all one had to do was drink the water in which the gem had been soaking. Early sailors believed that aquamarine talismans, etched with the likeness of the sea god Neptune, protected them against ocean dangers.";  
				break;
			case "Diamond": // Case for when birth month is April and stone is Diamond
				echo "<p>The April birthstone, diamond, in addition to being a symbol of everlasting love, was once thought to bring courage. In Sanskrit, the diamond is called vajra, which also means lightning; in Hindu mythology, vajra was the weapon of Indra, the king of gods.</p>";  
				break;
			case "Emerald": // Case for when birth month is May and stone is Emerald
				echo "<p>The May birthstone, emerald, was one of Cleopatra’s favorite gems. It has long been associated with fertility, rebirth, and love. Ancient Romans went so far as to dedicate this stone to Venus, the goddess of love and beauty. Today, it is thought that emeralds signify wisdom, growth, and patience.</p>";  
				break;
			case "Pearl": // Case for when birth month is June and stone is Pearl
				echo "<p>The June birthstone, pearl, has long been a symbol of purity. The ancient Greeks believed that pearls were the hardened tears of joy from Aphrodite, the goddess of love.</p>";  
				break;
			case "Ruby": // Case for when birth month is July and stone is Ruby
				echo "<p>The July birthstone, ruby, was regarded by ancient Hindus as the 'king of gems'. It was believed to protect its wearer from evil. Today, the ruby’s deep-red color signifies love and passion.";  
				break;
			case "Peridot": // Case for when birth month is August and stone is Peridot
				echo "<p>The August birthstone, peridot, symbolizes strength. It is sometimes called the 'evening emerald' for its light green color. It was once believed that the green peridot crystals found in volcanic ashes were the tears of the volcano goddess, Pele. When set in gold, this gem was said to protect the wearer from nightmares.</p>";  
				break;
			case "Sapphire": // Case for when birth month is September and stone is Sapphire
				echo "<p>The September birthstone, sapphire, was once thought to guard against evil and poisoning. It was believed that a venomous snake would die if placed in a vessel made of sapphire. Traditionally a favorite stone of priests and kings, the sapphire symbolizes purity and wisdom.</p>";  
				break;
			case "Opal": // Case for when birth month is October and stone is Opal
				echo "<p>The October birthstone, opal, symbolizes faithfulness and confidence. The word comes from the Latin opalus, meaning 'precious jewel'. Necklaces with opals set in them were worn to repel evil and to protect eyesight.</p>";  
				break;
			case "Topaz": // Case for when birth month is November and stone is Topaz
				echo "<p>The November birthstone, topaz, symbolizes love and affection. It is believed to give the wearer increased strength and intellect.</p>";  
				break;
			case "Turquoise": // Case for when birth month is December and stone is Turquoise
				echo "<p>The December birthstone, turquoise, is regarded as a love charm. It is also a symbol of good fortune and success, and it is believed to relax the mind and to protect its wearer from harm. Turquoise rings, in particular, are thought to keep away evil spirits.</p>";  
				break;
			default:
				echo "";  
				break;
		}
	}
	?>
	
	<!-- Option to start over -->
	<div class="center"><a href="index.html"><input type="submit" class="button" value="Start Again"></a></div>

  <!-- Credit to where content was taken from -->
	<div class="credit">Content borrowed from <a href="https://horoscopes.lovetoknow.com/about-astrology/list-zodiac-birthstones" target="_blank">Love To Know</a> and <a href="https://www.almanac.com/content/birthstones-and-their-meanings#" target="_blank">Almanac </a></div>

	<!-- RUBRIC -- Pasting this here for guidelines to make sure I get a good grade :)

	Form Setup	
	Points Range:0 (0.00%) - 20 (20.00%)
	Form is set up with all the appropriate fields and appropriate variable names for parameters.

	Form Validation	
	Points Range:0 (0.00%) - 20 (20.00%)
	If the user’s name is not entered, the form provides feedback accordingly and sends the user back to add the missing information.

	Use of Conditional Statements	
	Points Range:0 (0.00%) - 30 (30.00%)
	Form uses Switch statement and displays results correctly.

	Option to Start Over	
	Points Range:0 (0.00%) - 10 (10.00%)
	The feature is provided.

	Commenting	
	Points Range:0 (0.00%) - 20 (20.00%)
	Code is liberally commented, to explain logic in plain English.

	-->
	</div>
	</div>
	</div>
	</div>

</body>
</html>