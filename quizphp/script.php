<?php

$answer1 = isset($_POST['q1answer']) ? $_POST['q1answer'] : false;
// Voir answer2 plus bas
$answer3 = isset($_POST['q3answer']) ? $_POST['q3answer'] : false;
$answer4 = isset($_POST['q4answer']) ? $_POST['q4answer'] : false;
$answer5 = isset($_POST['q5answer']) ? $_POST['q5answer'] : false;
$answer6 = isset($_POST['q6answer']) ? $_POST['q6answer'] : false;
$answer7 = isset($_POST['q7answer']) ? $_POST['q7answer'] : false;
$answer8 = isset($_POST['q8answer']) ? $_POST['q8answer'] : false;


$answer3 = strtolower($answer3);

$totalCorrect = 0;

if ($answer1 == "C") { $totalCorrect++; }
if (isset($_POST['q2answerB']) && isset($_POST['q2answerC']) && isset($_POST['q2answerE']) && !isset($_POST['q2answerA']) && !isset($_POST['q2answerD'])) {
  $totalCorrect++;
}
if ($answer3 == "it-akademy") { $totalCorrect++; }
if ($answer4 == "B") { $totalCorrect++; }
if ($answer5 == "C") { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "B") { $totalCorrect++; }
if ($answer8 == "A") { $totalCorrect++; }
if ($answer8 == "B") { $totalCorrect++; }

if ($totalCorrect <= 3) {
  echo "<div id='results'>You suck big fat balls, only " . $totalCorrect . "/8.</div>";
} else if ($totalCorrect >=4 && $totalCorrect <=6) {
  echo "<div id='results'>You are average, you got " . $totalCorrect . "/8.</div>";
} else {
  echo "<div id='results' style='text-align:center; font-size:60px'>You rock! You got " . $totalCorrect . "/8.</div>";
}