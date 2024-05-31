<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    echo "Hello World <br>";


    // single-line comment
    # also single-line comment
    /* 
    multiple
    lines 
    comment
    */

    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    $txt = "Hello world";
    $x = 5;
    $y = 10.5;

    $txt = "PPW1";
    echo "I Love $txt! <br>";
   
    echo "I Love " . $txt . "! <br>";

    $x = 5;
    $y = 4;
    echo $x + $y . "<br>";

    echo strlen("Hello World!") . " (strlen hello world!) <br>";

    echo str_word_count("Hello World!") . " (str_word_count) <br>";

    echo strrev("Hello World!") . " (strrev) <br>";

    echo strpos("Hello World!","World")." (strpos pencarian string)<br>";

    echo str_replace("World","Dolly","Hello World!")."(str_replace)<br>";

    function writeMsg() {
        echo "Hello World! (function)" . "<br>";
    }

    writeMsg();

    function familyName($fname) {
        echo "$fname Jaeger. <br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");

    function familyName_($fname, $year) {
        echo "$fname Jaeger. Born in $year <br>";
    }

    familyName_("Hege", "1975");
    familyName_("Stale", "1978");
    familyName_("Kai Jim", "1983");

    function setHeight($minHeight = 50) {
        echo "The height is : $minHeight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";

    ?>

</body>
</html>