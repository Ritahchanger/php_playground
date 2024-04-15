<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISIBILITY</title>
</head>

<body>
    <?php


    require 'FileReader.php';
    require 'csvFileReader.php';

    $fileReader = new CsvFileReader();


    ?>

    <p><?php echo $fileReader->getData(); ?></p>
</body>

</html>