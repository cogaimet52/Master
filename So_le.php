<?php 
  $Cac_so_le = array();
  for ($i=3; $i <= 150; $i++)
  { 
  	if ($i%2==1){
  		array_push($Cac_so_le,$i);	}
  	}

    	foreach ($Cac_so_le as $key => $value) {
  			echo $value .'<br/>';
  		}
 ?>