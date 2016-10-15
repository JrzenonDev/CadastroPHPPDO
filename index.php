<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>
<body>

    <?php

        $attributes = [
        'nome' => 'Romario',
        'email' => 'romario@gmail.com'
    ];

    cadastrar('users', $attributes);

    ?>

</body>
</html>