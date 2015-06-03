
<?php

$f = file("message.txt");

for ($i=0;$i<count($f);$i++){
	$w = explode(" ",$f[$i]);
	for ($j=0;$j<count($w);$j++){
		echo preg_replace_callback(
	 	   	'/[a-z]/', 
	    	function($match) {
	    	    return '<img src="http://www.civilwarsignals.org/cipher/pigpen/pigpen_'.$match[0].'.gif" /> ';
	    	},
	    	trim($w[$j])
			. "     "
	    );
	}
	echo("<br />\n");
}
echo("\n");
?>
