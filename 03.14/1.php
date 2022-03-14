<?PHP
    $text = <<< SCHOOL
    ZSL - Zespół
    Szkół Łączności<br>
SCHOOL;

    echo "$text<br>";
    echo nl2br($text);

    $name="Janusz";
    echo "$name<br>";
    echo strtolower($name);
    echo strtoupper($name);
    $surname="Bąk<br>";
    echo strtoupper($surname);
    echo mb_strtoupper($surname);

    $text="Janusz Bąk";
    echo "<hr>$text<br>";
    echo mb_strtolower($text)."<br>";
    echo ucfirst(mb_strtolower($text))."<br>";
    echo ucwords(mb_strtolower($text))."<br>";

    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eos porro culpa at illo sint nulla sit mollitia! Aspernatur doloremque, accusamus voluptatem nam rem quis! Nobis amet fugiat earum impedit.<br>";

    echo $lorem;
    echo wordwrap($lorem, 40, "<br>");
    echo wordwrap($lorem, 40, "<hr>");

    ob_clean(); //wyczyszcza całą strone powyżej

    $name="  Jan ";
    echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
    echo "Długość imienia ".ltrim($name)."wynosi: ".strlen(ltrim($name))."<br>";
    echo "Długość imienia ".rtrim($name)."wynosi: ".strlen(rtrim($name))."<br>";
    echo "Długość imienia ".trim($name)."wynosi: ".strlen(trim($name))."<br>";
?>