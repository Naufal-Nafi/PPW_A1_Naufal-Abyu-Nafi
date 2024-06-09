<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }
    
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    
    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } else if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }


    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red! <br>";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your Your favorite color is neither red, blue, nor green";
    }



    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    $y = 1;
    do {
        echo "The number is: $y <br>";
        $y++;
    } while ($y <= 7);

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }



    $cars = array("Volvo", "BMW", "Toyota");
    echo "i like $cars[0], $cars[1] and $cars[2].<br>";

    echo count($cars);

    echo "<br>";

    $arrlength = count($cars);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    $age = array("Peter"=>"35", "Bem"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", value=" . $x_value;
        echo "<br>";
    }

    $cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row </b></p>";
        echo "<ul>";
        for ($col = 0; $col <3; $col++) {
            echo "<li>" . $cars[$row][$col]. "</li>";
        }
        echo "</ul>";
    }

    


    ?>
</body>
</html>