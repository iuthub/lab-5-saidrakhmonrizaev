	<?php 
error_reporting(0);  
 ?>


	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 
					$card=$_POST["credit_card"];
					$card_type=$_POST["credit_card_t"]; 
					$name=$_POST["name"];
					$section=$_POST["section"]; ?>


		<?php if (isset($section) && isset($card) && isset($name) && isset($card_type)) { ?>
		<div>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo($_POST["name"]);?></dd>

			<dt>Section</dt>
			<dd><?php echo($_POST["section"]);?></dd>
			
			<dt>Credit Card</dt>
			<dd><?php echo "$card"."  "."($card_type)";?></dd>
		</dl>
		<button><a href="buyagrade.php">Return to form</a></button>

		<?php 	$current="";
				$current.="$name"." ;"."$section"." ;"."$card"." ;"."$card_type"."\n";
				file_put_contents("suckers.txt",$current,FILE_APPEND);?>		

		<pre><?php print_r(file_get_contents("suckers.txt"));?></pre>
		</div><?php } else {?>
			<div>
				<h3>Sorry</h3>
				<p> You didn't fill out form completely.</p>
				<button><a href="buyagrade.php">Return to form</a></button>

			</div>
		<?php }?>


			<?php //print_r($_POST);?>
	</body>
</html>  