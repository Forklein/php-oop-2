<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Premium.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Ereditarietà</title>
</head>

<body>
    <main>
        <section>
            <? $user = new User('Giuseppe', 'Pisani', 'test@libero.it') ?>
            <h1><?= $user->getFullName() ?></h1>
            <? $premium = new Premium('Giuseppe', 'Pisani', 'test@libero.it') ?>
            <h1><?= $premium->getDiscount() ?></h1>
        </section>
    </main>
</body>

</html>