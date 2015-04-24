<?php
if(isset($_POST['number'])) {
	$fact = $_POST['number'];
	 
	function factorial($n) {
		if($n == 0) {
			return 1;
		} else {
			return $n * factorial($n - 1);
		}
	}
	
	$ans = factorial($fact);
}
?>
<html>
	<body>
		<form action="" method="POST">
			<label for="number">Enter a number to factorize (Btn 0 - 170): </label>
			<br /><br />
			<input type="text" name="number" id="number" />
			<br /><br />
			<input type="submit" />
		</form>
		<hr />
		<?php
			if(isset($ans)) {
				echo "Factorial of $fact is: ". $ans;
			}
		?>
	</body>
</html>
