<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <h4>Dane użytkownika</h4>\
    <form action="./scripts/data.php" method="post">
    <input type="text" name="name" placeholder="Podaj imię"><br><br>
    <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
    <select name="city">
        <option value="Poznań">Poznań</option>
        <option value="Gniezno">Gniezno</option>
    </select><br><br>
    <input type="radio" name="sex" value="Mężczyzna">Mężczyzna
    <input type="radio" name="sex" value="Kobieta">Kobieta<br><br>;
    <input type="submit" value="Zatwierdź"><br><br>
</body>
</html>