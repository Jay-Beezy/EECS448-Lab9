<?php
$correctAnswers = 0;

echo "<h2>Question 1: Which film, released in 1975, won the academy award for best picture?</h2>";
echo "You answered: " . $_POST["questionOne"]."<br/>";
echo "Correct answer: One Flew Over the Cuckoo's Nest<br/>";

echo "<h2>Question 2: Which actress has won the most academy award?</h2>";
echo "You answered: " . $_POST["questionTwo"]."<br/>";
echo "Correct answer: Katharine Hepburn<br/>";

echo "<h2>Question 3: Which film did not star Al Pacino?</h2>";
echo "You answered: " . $_POST["questionThree"]."<br/>";
echo "Correct answer: Ocean's Eleven<br/><br/>";

echo "<h2>Question 4: Which film was not directed by Steven Spielberg?</h2>";
echo "You answered: " . $_POST["questionFour"]."<br/>";
echo "Correct answer: Men in Black<br/>";

echo "<h2>Question 5: Out of the four films, which was the highest grossing?</h2>";
echo "You answered: " . $_POST["questionFive"]."<br/>";
echo "Correct answer: Titanic<br/>";

if($_POST["questionOne"] == "One Flew Over the Cuckoo's Nest"){
        $correctAnswers = $correctAnswers + 1;
}
if($_POST["questionTwo"] == "Katharine Hepburn"){
        $correctAnswers = $correctAnswers + 1;
}
if($_POST["questionThree"] == "Ocean's Eleven"){
        $correctAnswers = $correctAnswers + 1;
}
if($_POST["questionFour"] == "Men in Black"){
        $correctAnswers = $correctAnswers + 1;
}
if($_POST["questionFive"] == "Titanic"){
        $correctAnswers = $correctAnswers + 1;
}

echo "<h1>You scored " . $correctAnswers / 5 * 100 . "%!</h1>";

?>
