<?php
    $title = "PHP Badwords";
    $bad_text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur iusto ipsa excepturi perspiciatis quam corrupti rem eaque atque! Deleniti amet ut ipsum quidem provident ullam nulla fugiat molestias deserunt possimus!";
    $bad_word = $_GET['bad_word'];
    $good_text = str_replace($bad_word, "***", $bad_text);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $bad_text; ?></p>
    <h2>Lunghezza paragrafo con badwords: <?php echo strlen($bad_text); ?></h2>
    <p><?php echo $good_text; ?></p>
    <h2>Lunghezza paragrafo senza badwords: <?php echo strlen($good_text); ?></h2>
</body>
</html>