<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>

    <?php


    require "PremiumCheckingAccount.php";


    $premiumCheckingAccount = new PremiumCheckingAccount();

    echo $premiumCheckingAccount->minimumBalance;

    $premiumCheckingAccount->deposit(300);

    $premiumCheckingAccount->withdraw(100);

    $premiumCheckingAccount->transfer(1300);



    ?>


</body>

</html>