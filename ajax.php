<?php
	$aCoords = array();
	$y = 300;
	$data = '';
	
	for ($i = 0; $i < 195; $i++) {
		$x = $i*4 + 10;
		
		if ($y < 20) {
			$y = 20;
		}
		if ($y > 580) {
			$y = 580;
		}
		
		$y = rand($y-10, $y+10);
		
		$aCoords[] = array($x, $y);		
		$data .= $x . ',' . $y . ' ';
	}
	
	file_put_contents('data.txt', $data . "\n", FILE_APPEND);
	exit(json_encode($aCoords));