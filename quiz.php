<?php
session_start();
include('inc/randomQuestions.php');
$counter = 10;
$qnumber = $_GET['question'];
    if(empty($qnumber)) {
      $qnumber = 1;
    }
    //keep track of what question user is on and after
    //final question redirect to result page
        if($qnumber <= $counter)
        {$qnumber++;}
        elseif ($qnumber > $counter) {
          header('location:result.php');
        }
//Set a session variable to keep track of the correct answers (browser persistence)
//If the button with the name 'correct' is clicked add 1 to the score
//If either of the other 2 buttons are clicked score stays the same
if(isset($_POST['correct'])) {

  $_SESSION['score'] += 1;
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <p align="center">

            <?php
                  //Toast the answsers if they're correct or incorrect
                  //If no answers have been selected yet then start with 'Good luck'
                        if(empty($_GET)) {

                              echo '<h2 align="center">Good luck! </h2>';
                            }

                        elseif($_POST['correct']) {

                                echo '<h2 align="center">Correct! </h2>';
                            }

                        else{
                                echo '<h2 align="center">Oh no! Incorrect!</h2>';
                            }
                ?>

          </p>
        <div id="quiz-box">


    <?php
              //Display which question the user is on
                echo '<p class="breadcrumbs">Question ' . ($qnumber-1) .
                ' of ' . $counter .'</p>';

                //Ask the question
                echo '<p class="quiz">' . $problem .'</p>';


            echo '<form action="quiz.php?question=' .($qnumber) .'" method="post">';

            //shuffle the buttons_array (from randomQuestions.php) so that
            //the answer buttons are mixed up
                  shuffle($buttons_array);
              //get the strings from the buttons array now that it's shuffled
              //and display the html buttons
                  $button1 = implode($buttons_array[0]);
                  $button2 = implode($buttons_array[1]);
                  $button3 = implode($buttons_array[2]);
                      echo $button1;
                      echo $button2;
                      echo $button3;



            echo '</form>';
      ?>

        </div>
    </div>
</body>
</html>
