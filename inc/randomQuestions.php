<?php
session_start();

//get 2 random numbers to create addition problem
$random1 = rand(1,99);
$random2 = rand(1,99);

//Create a string variable which displays the question as an addition problem
$problem = 'What is ' . $random1 .' + ' . $random2;

//calculate the correct answer for the generated problem
$answer = $random1 + $random2;

//create an array (range_of_10_array) that will generate a range of answers
//that are within 10 numbers either way of the correct answer
$range_of_10 = range(($answer-10),($answer+10));

//randomly pick 2 more numbers (to be called later) from between 0 and
//however many values are within the answer_within_10 array
$pick1 = (rand(0,(count($range_of_10) -1)));
$pick2 = (rand(0,(count($range_of_10) -1)));


//Use $pick1 and $pick2 to call values from the $answer_within_10 array.
//Assign those values to $wrong1 and $wrong2 which will now both equal values
//that are within 10 numbers of the correct answer
$wrong1 = $range_of_10[$pick1];
$wrong2 = $range_of_10[$pick2];


//fixes a glitch where buttons would sometimes be blank and also
//prevents the two wrong answers being the same (which happened sometimes)
if ($wrong1 == $answer || $wrong2 == $answer ||$wrong1 == $wrong2) {
      $wrong1 = $answer-5;
      $wrong2 = $answer+5;
  }

//create an array to store the strings that are the html for
//all 3 answer buttons
$buttons_array[] = ['<input type="submit" class="btn" name="wrong1"
value="' . $wrong1 . '" />'

];

$buttons_array[] = ['<input type="submit" class="btn" name="wrong2"
value="' . $wrong2 . '" />'

];

$buttons_array[] = ['<input type="submit" class="btn" name="correct"
value="' . $answer . '" />'

];
