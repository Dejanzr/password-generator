<?php 

		// Random character
	function random_char($string) {
		$i = mt_rand(0,strlen($string) -1);
		return $string[$i];

	}
		// Random String
	function random_string($length, $char_set){
			
			$output = '';

			for($i = 0; $i < $length; $i++){
			$output .= random_char($char_set);
			}

			return $output;
	}
		// Random password with parameter length
	function generate_password($length) {

		// defined character sets
		$lower = 'abcdefghijklmnopqrstuvwxyz';
		$upper = 'ABCDEFGHIKLMNOPQRSTUVWXYZ';
		$number = '0123456789';
		$symbols = '$*?!-';

		$useLower = true;
		$useUpper = true;
		$useNumbers = true;
		$useSymbols = true;

		$chars = '';

		if($useLower === true)   { $chars .= $lower; }
		if($useUpper === true)   { $chars .= $upper; }
		if($useNumbers === true) { $chars .= $number; }
		if($useSymbols === true) { $chars .= $symbols; }

		return random_string($length, $chars);	
	}

	$password = generate_password($_GET['length']);   
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Password Generator</title>
</head>
<body>
	<p> Generate Password: <?php echo $password; ?> </p>
	<p> Generate a new password using the form options. </p>

	<form action="" method="GET">
	Enter Length: <input type="text" name="length" value="<?php if(isset($_GET['length'])) { echo $_GET['length'];} ?>"> <br/>
	<input type="submit" value="Submit" />
	</form>
</body>
</html>

