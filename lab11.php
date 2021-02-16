<?php
	$title = "Bonus Lab";
	$file = "lab_bonus.php";
	$description = "Bonus Lab page for my WEBD2201 Website";
	$date = "17 April 2020";
	$banner = "Bonus Lab: Advanced PHP Application - Math Quiz";
	/*
	Daniel Hinbest
	WEBD2201
	April 17, 2020
	*/
	
	include "header.php";

	define("MAX_QUESTIONS", 5);
	$body = "";
	$numberCorrect = 0; 
	$questionNumber = 0; 
	$newFirstDigit = randdigit(); 
	$newSecondDigit = randdigit(); 
	$newOperator = randop(); 
	$equals = "=";

	if (isset($_POST['submit'])) //Checks for submit
	{
		$firstDigit = $_POST['first_number'];
		$secondDigit = $_POST['second_number'];
		$operator =  $_POST['operation'];
		$answer = $_POST['answer'];
		$questionNumber = $_POST['question_number'];
		$numberCorrect = $_POST['number_correct'];
		$correctAnswer = evaluate($firstDigit, $secondDigit, $operator);
		$body = $firstDigit . " " . $operator . " " . $secondDigit . " = " . $correctAnswer;

		if ($answer == $correctAnswer) //Checks for correct answer
		{
			$questionNumber++;
			$numberCorrect++;
			$body .= "<br/>Congratulations!<br/>";
			$body .= $numberCorrect . " out of " . $questionNumber;
		}
		else
		{   
			$questionNumber++;
			$body .= "<br/>" . $numberCorrect . " out of " . $questionNumber;
		}

		if ($questionNumber == MAX_QUESTIONS) //Checks for max questions reached. 
		{
			$body .= "<br/>Do you want to try again? <a href='lab11.php'>Yes!</a> <a href='index.php'>No!</a>";
			$newFirstDigit = "";
			$newSecondDigit = "";
			$newOperator = "";
			$equals = "";
			$answer = "";
		}
	}
?>
	<h2>Math Quiz</h2>
	<p>This is the final lab of the WEBD 2201 course. It is an option PHP application that creates a math quiz.
	The page generate a random number between 0 and 9 as well as a random operation. Then it outputs it in the form
	as a question for the user to enter. After each question is answered, the question counter is incremented, and
	if the answer is correct, so is the correct answer counter. After 5 questions, the quiz is complete and displays 
	the final score and gives the user the option to try again.</p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h3><?php echo $body; ?></h3>
		<table class="login">
			<tr>
				<td class="login"><h3><?php echo $newFirstDigit;?> <?php echo $newOperator; ?> <?php echo $newSecondDigit . " " . $equals; ?> </h3></td>
				<td class="login"><h3><input type="text" name="answer" size="5" /></h3></td>
			</tr>
			<tr>		
				<td class="login" colspan="2"><input type="submit" name="submit" value="Submit"/></td>	
			</tr>
		</table>
    			<p><input type="hidden" name="first_number" value="<?php echo $newFirstDigit ?>"/>
    			<input type="hidden" name="second_number" value="<?php echo $newSecondDigit; ?>"/>
    			<input type="hidden" name="operation" value="<?php echo $newOperator; ?>"/>
    			<input type="hidden" name="number_correct" value="<?php echo $numberCorrect++; ?>"/>
    			<input type="hidden" name="question_number" value="<?php echo $questionNumber++; ?>"/>	</p>
	</form>

	<?php include "footer.php";?>
