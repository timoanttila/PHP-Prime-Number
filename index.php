<?php
function prime_or_not($no1) {
	$numbers = [2,3,5,7,11];

	if(in_array($no1, $numbers)) {
		$total = 0;

		for ($i = 1; $i <= $no1; $i++) {
			$total += $i;
		}

		return $total;
	} else if ($no1 < 2) {
		return 0;
	}
	return -1;
}

$test = [
	[11, 66],
	[1, 0],
	[12, -1],
	[7, 28]
];

foreach($test as $item){
	$e = prime_or_not($item[0]);
	if($e == $item[1]) {
		echo "Correct\n";
	} else {
		echo "Incorrect\n";
	}
}
