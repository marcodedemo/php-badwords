<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

    $paragrafo = $_POST['paragrafo'];
    $hiddenWord = $_POST['hiddenWord'];

    ?>

    <strong>Paragrafo:</strong>
    <p> <?php echo $paragrafo ?> </p>

    <i>Il paragrafo è lungo <?php echo strlen($paragrafo) ?> caratteri</i>

    <hr>

    <strong>Paragrafo censurato:</strong>
    <p> <?php echo str_replace($hiddenWord, '***',$paragrafo) ?> </p>
    <i>Il paragrafo è lungo <?php echo strlen(str_replace($hiddenWord, '***',$paragrafo)) ?> caratteri</i>

</body>
</html>