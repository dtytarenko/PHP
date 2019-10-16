<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice PHP</title>
</head>
<body>
    <?php 
    echo $_SERVER['HTTP_USER_AGENT'];

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
        echo 'This is IE-shits';
    } else {
        echo 'You have good browser';
    }
    ?>
</body>
</html>