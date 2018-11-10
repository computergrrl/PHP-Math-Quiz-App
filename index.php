<?php

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
         <div id="quiz-box">
             <p class="breadcrumbs">&nbsp;</p>
             <p align="center" class="quiz">Begin quiz</p>
                 <form action="quiz.php" method="post">
                 <input type="hidden" name="id" value="0" />
                 <input type="submit" class="startbtn" name="start" value="Start" />
             </form>
         </div>
     </div>
 </body>
 </html>
