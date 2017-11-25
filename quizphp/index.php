<?php
  require_once('./createForm.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quizz IT-Akademy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
    <?php
      echo openForm("./script.php");
      echo openH3("Quizz IT-Akademy");
      echo createElement("Combien y a t-il<br>de Morgan dans la classe ?", [
        [
          'type' => 'radio',
          'id' => 'q1answerA',
          'name' => 'q1answer',
          'content' => "0",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q1answerB',
          'name' => 'q1answer',
          'content' => "1",
          'value' => "B",
        ],
        [
          'type' => 'radio',
          'id' => 'q1answerC',
          'name' => 'q1answer',
          'content' => "2",
          'value' => "C",
        ],
        [
          'type' => 'radio',
          'id' => 'q1answerD',
          'name' => 'q1answer',
          'content' => "3",
          'value' => "D",
        ],
      ]);
      echo createElement("Qui sont les 3 filles<br>de la classe ?", [
        [
          'type' => 'checkbox',
          'id' => 'q2answerA',
          'name' => 'q2answer',
          'content' => "Sandra",
          'value' => "A",
        ],
        [
          'type' => 'checkbox',
          'id' => 'q2answerB',
          'name' => 'q2answer',
          'content' => "Julie",
          'value' => "B",
        ],
        [
          'type' => 'checkbox',
          'id' => 'q2answerC',
          'name' => 'q2answer',
          'content' => "Sophie",
          'value' => "C",
        ],
        [
          'type' => 'checkbox',
          'id' => 'q2answerD',
          'name' => 'q2answer',
          'content' => "Laure",
          'value' => "D",
        ],
        [
          'type' => 'checkbox',
          'id' => 'q2answerE',
          'name' => 'q2answer',
          'content' => "Cloé",
          'value' => "E",
        ],
      ]);
      echo "<fieldset>";
      echo "<h4>Comment écrivez-vous<br>le nom de l'école ?</h4>";
      echo "<div>";
      echo createInputText("text", "q3answer", "q3answerA", "Réponse");
      echo "</fieldset>";
      echo "</div>";
      echo createElement("Quel est l'âge minimum<br>pour intégrer la formation ?", [
        [
          'type' => 'radio',
          'id' => 'q4answerA',
          'name' => 'q4answer',
          'content' => "14 ans",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q4answerB',
          'name' => 'q4answer',
          'content' => "18 ans",
          'value' => "B",
        ],
        [
          'type' => 'radio',
          'id' => 'q4answerC',
          'name' => 'q4answer',
          'content' => "30 ans",
          'value' => "C",
        ],
      ]);
      echo createElement("A quel point en chie-t-on ?", [
        [
          'type' => 'radio',
          'id' => 'q5answerA',
          'name' => 'q5answer',
          'content' => "Un peu",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q5answerB',
          'name' => 'q5answer',
          'content' => "Beaucoup",
          'value' => "B",
        ],
        [
          'type' => 'radio',
          'id' => 'q5answerC',
          'name' => 'q5answer',
          'content' => "Passionnément",
          'value' => "C",
        ],
      ]);
      echo createElement("Ceci est la 6e question :", [
        [
          'type' => 'radio',
          'id' => 'q6answerA',
          'name' => 'q6answer',
          'content' => "Vrai",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q6answerB',
          'name' => 'q6answer',
          'content' => "Faux",
          'value' => "B",
        ],
      ]);
      echo createElement("Yann a-t-il vraiment essayé<br>de nous acheter des croissants ?", [
        [
          'type' => 'radio',
          'id' => 'q7answerA',
          'name' => 'q7answer',
          'content' => "Oui",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q7answerB',
          'name' => 'q7answer',
          'content' => "Non",
          'value' => "B",
        ],
      ]);
      echo createElement("Quel est le meilleur<br>système d'exploitation ?", [
        [
          'type' => 'radio',
          'id' => 'q8answerA',
          'name' => 'q8answer',
          'content' => "Linux",
          'value' => "A",
        ],
        [
          'type' => 'radio',
          'id' => 'q8answerB',
          'name' => 'q8answer',
          'content' => "Linux",
          'value' => "B",
        ],
      ]);
      echo "<br>";
      echo createSubmit("score", "finish");
      echo closeTag("form");
      ?>
  </body>
</html>
