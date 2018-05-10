<?php

	
echo "Qual o ano do seu veículo: ";

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100 ; $i--) { 
	echo '<option value= "">'.$i.'</option>';
	
}

echo "</select>";

?>