<?php
	require_once("GoogleURL.php");
	$url = new GoogleURL('AIzaSyDiEruel1IfSAR0k0bc8pU4wvYYFCdbzow');
	echo $url->shorten("http://support.mozilla.com/en-US/kb/Keyboard%20shortcuts"), '<br/>';
	echo $url->expand($url->shorten("http://support.mozilla.com/en-US/kb/Keyboard%20shortcuts")),'<br/>';
	echo $url->getLongUrlCliks(), "<br/>";
	echo $url->getShortUrlClicks(), "<br/>";

?>