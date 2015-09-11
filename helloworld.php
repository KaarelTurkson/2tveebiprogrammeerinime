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