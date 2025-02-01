<?php

use framework\Session;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>Hello
        <?= Session::get('user')['firstname'] ?>
    </H1>
</body>

</html>
