<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require 'comment.php';
    $comment = new Comment('This is a some text', 900);
    ?>

    <p><?php echo $comment->text ?> by <?php echo $comment->userId ?></p>

</body>

</html>