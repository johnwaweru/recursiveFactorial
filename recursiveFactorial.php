<?php 
function factorial($n) {
	if($n == 0) {
		return 1;
	} else {
		return $n * factorial($n - 1);
	}
}

$fact = 1000; // Number whose factorial we're deriving

echo "Factorial of $fact is: " . factorial($fact);

?>