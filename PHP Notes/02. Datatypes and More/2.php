<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php
		// addition using normal variables
		$number1 = 10;
		$number2 = 20;
		echo $number1 + $number2;
		echo "<br>";

		// addition using normal array
		$number = array(10, 20);		// $number = [10, 20];
		echo $number[0] + $number[1];
		echo "<br>";

		// addition using associative array
		$number = ["first_num" => 10, "second_num" => 20];
		echo $number['first_num'] + $number['second_num'];

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>