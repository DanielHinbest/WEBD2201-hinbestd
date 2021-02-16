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

$body = "";  

$score = 0;
$count = 0;
$newFdigit = randdigit();
$newSdigit = randdigit();
$newOperator = randop();
if(isset($_POST['submit']))
{
    $firstDigit = $_POST['lho'];
    $secondDigit = $_POST['rho'];
    $operator = $_POST['op'];
    $userAnswer = $_POST['answer'];
    $count = $_POST['count'];
    $score = $_POST['score'];
    $answer = evaluate($firstDigit, $secondDigit, $operator);

    if($answer == $userAnswer)
    {
        $count++;
        $score++;
        $body .= "\n<h1>Congratulations!</h1>\n\n";
        $body .= "$score out of $count";
    }
    else
    {   
        $count++;
        $body .= "\n<h1>Sorry!</h1>\n\n";
        $body .= "$score out of $count";
    }
}

header( 'Content-Type: text/html; charset=utf-8');
print("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");

?>


<h1>Math Quiz</h1> <br /> <br />

<?php 
    print $body;
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h3><?php echo $newFdigit; ?> <?php echo $newOperator; ?> <?php echo $newSdigit; ?> = ? 
        <input type="text" name="answer" size="2" /></h3>

    <p><input type="submit" name="submit" value="Try It!" />
    <input type="hidden" name="lho" value="<?php echo $newFdigit ?>" />
    <input type="hidden" name="rho" value="<?php echo $newSdigit; ?>" />
    <input type="hidden" name="op" value="<?php echo $newOperator; ?>" />
    <input type="hidden" name="score" value="<?php echo $score++; ?>" />
    <input type="hidden" name="count" value="<?php echo $count++; ?>" /></p>
</form>

<?php
    include("./footer.php");
?>