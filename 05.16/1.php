<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
</head>
<body>
    <h4>Dane użytkownika</h4>
    <form method="get">
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        Data urodzenia<br>
        <input type="text" name="year" placeholder="Podaj rok">
        <input type="text" name="month" placeholder="Podaj miesiąc">
        <input type="text" name="day" placeholder="Podaj dzień"><br><br>
        <input type="text" name="email" placeholder="Podaj emaila"><br><br>
        <input type="text" name="kod" placeholder="Podaj kod pocztowy"><br><br>
        <input type="submit" value="Zatwierdź">
        <?php
        $re = '/(?P<name>[a-z*A-Z*ą*ć*Ć*ę*Ę*ł*Ł*ń*Ń*ó*Ó*ś*Ś*ź*Ź*ż*Ż]{2,})
        (?P<surname>[a-z*A-Z*ą*ć*Ć*ę*Ę*ł*Ł*ń*Ń*ó*Ó*ś*Ś*ź*Ź*ż*Ż]{2,})
        (?P<year>[0-9.]{4})
        (?P<month>[0-9.]{2})
        (?P<day>[0-9.]{2})
        (?P<email>[a-z*A-Z*0-9.*_%+-]+@[a-z*A-Z*0-9.*_%+-]+\.[a-z*A-Z]{2,})
        (?P<kod>[0-9.*-]{6})/m';
        $str = 'Iwo
        Wiliński
        2003
        08
        13
        iwo.wilno@gmail.com
        60-682';
        
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        
        // Print the entire match result
        var_dump($matches);
        
        ?>
    </form>
</body>
</html>