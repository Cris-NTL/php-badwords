<?php
$inputParagraph = $_GET['paragraph'];
$inputCensure = $_GET['censure'];
$resParagraph = str_replace($inputCensure, '***', $inputParagraph);
$lengthParagraph = strlen($inputParagraph);
$lengthResParagraph = strlen($resParagraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura A Word</title>
</head>

<body>

    <div class="container">
        <h2>Your text:</h2>
        <div class="paragraph_container">
            <p>Text: <?php echo $inputParagraph; ?></p>
            <p>Length of: <?php echo $lengthParagraph; ?> letters</p>
        </div>
        <h2>Censored Text:</h2>
        <div class="censorship_container">
            <p><?php echo $resParagraph; ?></p>
            <p>Length of: <?php echo $lengthResParagraph; ?></p>
        </div>
    </div>

</body>

</html>
