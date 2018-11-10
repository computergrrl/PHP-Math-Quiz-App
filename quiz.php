<?php
session_start();
include('inc/questions2.php');
$counter = count($questions);
$qnumber = $_GET['question'];
    if(empty($qnumber)) {
      $qnumber = 1;
    }

// $score = 0;
if(isset($_POST['correct'])) {

  $_SESSION['score'] += 1;
}
echo $_SESSION['score'] .'<br />';
var_dump($_SESSION);

// var_dump($_GET);
// echo '<br />';
// var_dump($_POST);
// echo '<br />';
// var_dump($_SESSION);

// echo $score . '<br />';
// var_dump($_SESSION);
//session_destroy();
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
                  if(empty($_GET)) {
                    echo '<h2 align="center">Good luck! </h2>';
                  }
                elseif($_POST['correct']) {
                      echo '<h2 align="center">Correct! </h2>';

              }  else{
                        echo '<h2 align="center">Oh no! Incorrect!</h2>';
                      }
                      ?>
          </p>
        <div id="quiz-box">
            <?php echo '<p class="breadcrumbs">Question ' .$qnumber .
            ' of ' . $counter .'</p>';


//Create a variable that can cycle through the $questions array starting with the zero index key
                     $quest = $questions[$qnumber-1];

//Use the $quest variable to pull addition problem
//from the $questions array and ask it in question form
                     echo '<p class="quiz">What is ' . $quest['add1'] .
                            ' + ' . $quest['add2'] . '</p>';

//keep track of what question app is on and after final question redirect to result page
                    if($qnumber <= $counter)
                    {$qnumber++;}
                    elseif ($qnumber > $counter) {
                      header('location:end.php');
                    }


          echo '<form action="quiz.php?question=' .($qnumber) .'" method="post">';


          echo '<input type="hidden" name="id" value=" ">';


          echo '<input type="submit" class="btn" name="wrong1"
          value="' .$quest['wrong1'] . ' " />';
          echo '<input type="submit" class="btn" name="wrong2"
          value="' .$quest['wrong2'] . ' " />';
          echo '<input type="submit" class="btn" name="correct"
          value="' .$quest['correct'] . ' " />';
          echo '</form>'
  ?>
        </div>
    </div>
</body>
</html>


<!-- /* PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */



// Include questions

// Keep track of which questions have been asked

// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score -->
