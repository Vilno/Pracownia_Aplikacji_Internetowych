<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja 3</title>
</head>
<body>
    <h1>Sesja 3</h1>
    <?PHP
        session_start();
        echo session_id();
        //$_SESSION['name'] = 'Janusz';
        echo '<br>'.$_SESSION['name'].'<hr>';
        
        session_regenerate_id();
        session_destroy();
    ?>

    <a href="./session1.php">Pierwsza strona</a>
</body>
</html>