<?php

$total = 0;

foreach ($_GET as $key=>$value) {
  // why don't we need to wrap $value in 'urlDecode'?
	// echo "$key = " . $value . "<br />\n";
	$total += (int)$value;
  };

echo $total;


?>