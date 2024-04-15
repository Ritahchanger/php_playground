<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">
        username:<br>
        <input type="text" name="username" placeholder="Login">
        <input type="text" name="age" placeholder="Enter age..">

        <input type="email" name="email" id="" placeholder="Enter email">;


        <input type="submit" name="login" value="LOGIN">
    </form>

</body>

</html>

<?php


if (isset($_POST["login"])) {

   
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);


    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

   
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);


    if(empty($age)){

        echo "That number wasn't valid";

    }


    echo "You are {$age} years of age.! and your email is {$email} ";


}

?>