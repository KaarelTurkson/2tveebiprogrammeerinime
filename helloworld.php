<?php
	$first_name = "Kaarel";
	$last_name = "Türkson";
	
	echo $first_name." ".$last_name;
?>
<br>
<?php
	$age=21;
	// kui on väiksem kui 18 siis alaealine
	// kui on suurem või võrdne siis täisealine
	if($age <18) {
	//tõene
	echo "alaealine";
	} else {
	//väär
	echo "täisealine";
	}
	
	
?>
<br>
<?php
	// nii mitu korda trüki välja sõna "palju", kui palju vanus on
	
	for($i = 0; $i < $age; $i = $i + 1) {
	// see mida korratakse
	
	echo "palju-" ;
		
	}
	
	echo "õnne" ;
?>
<br>
<?php
	//kuupäev kujul 11.09.2015
	echo( date("l, j.m.Y h:i:s"))


?>