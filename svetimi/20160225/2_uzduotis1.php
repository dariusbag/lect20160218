<?php

	$txt 	= "One reason people lie is to achieve personal power";
	$m 		= explode(" ",$txt);
	$md 	= count($m);
	//var_dump($m);
	$max = $m[0];
	for($a=0;$a<$md;$a++){
		$temp = $m[$a];
		if(strlen($temp) > strlen($max)){
			$max = $temp;
		};
	};
	print("Diziausias zodis yra : ".$max);



?>