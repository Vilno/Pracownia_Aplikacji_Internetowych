<?PHP
    //substr
    $name="Janusz";
    echo substr($name, 0, 3)."<br>"; //Jan
    echo substr($name, 2, 2)."<br>"; //nu 

    //strreplace
    $string ="text";
    $replace=" *** ";
    echo str_replace($string, $replace, "Janusz text Anna text text Poznań");

    $tab = ["ą", "ę"];
    $replace = ["a", "e"];
    echo str_replace($tab, $replace, "Bąk")."<br>";

    $mail="janusz_kowalski@zsl.poznan.pl";
    echo $mail."<br>";
    echo substr($mail, 16, 13)."<br>";
    echo substr($mail ,strpos($mail, "@")+1)."<br>";
?>