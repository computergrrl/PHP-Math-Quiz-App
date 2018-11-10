<?php session_start();
//var_dump($_SESSION);
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
            <p class="quiz">Finished!</p>
            <p class="quiz">You scored a<?php echo '' . $_SESSION['score'] .
            ' out of 10!';
                session_destroy();?>  </p>

              <form action="quiz.php" method="post">
              <input type="submit" class="btn" value="Play again?" />
            </form>



          </div>
    </div>
</body>
</html>
