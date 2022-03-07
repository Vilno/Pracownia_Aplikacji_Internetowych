<?php
    echo "<hr>Script<hr>";
    /*
    echo "<table>";
    echo "<tr><th>Imie</th><th>Nazwisko<th><tr>";
    echo "<tr><td>Patryk</td><td>Kowalski<td><tr>";
    echo "<tr><td>Iwo</td><td>Wiliński<td><tr>";
    echo "<tr><td>Kacper</td><td>Serek<td><tr>";
    echo "<tr><td>Jakub</td><td>Szarafiński<td><tr>";
    echo "</table>"
    */

    //heredoc
    echo <<<TABLE
        <table>
            <tr><th>Imie</th><th>Nazwisko</th><th>Miasto</th><tr>
TABLE;
    for($i=0; $i<5; $i++){
        echo <<<ROW
        <tr>
            <td>Imię $i</td>
            <td>Nazwisko $i</td>
            <td>Miasto $i
        </tr>
ROW;
    }
    echo <<<TABLE
    <tr><td>Patryk</td><td>Kowalski</td><td>Gdańsk</td><tr>
    <tr><td>Iwo</td><td>Wiliński</td><td>Poznań</td><tr>
    <tr><td>Kacper</td><td>Serek</td><td>Zadupie</td><tr>
    <tr><td>Jakub</td><td>Szarafiński</td><td>Chojnice</td><tr>
    </table>
TABLE;
?>