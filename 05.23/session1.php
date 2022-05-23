<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja 1</title>
</head>
<body>
    <h1>Sesja 1</h1>
    <?PHP
        session_start();
        echo session_id();
        $_SESSION['name'] = 'Janusz';
        echo '<br>'.$_SESSION['name'].'<hr>';
    ?>

    <a href="./session2.php">Druga strona</a>
</body>
</html>