<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
    <?php
    $score = array(60,70,80,90,100);
    foreach ($score as $value) {
        if ($value >= 80) {
            echo "nilai $value Lulus <br>";
        } else {
            echo "nilai $value Tidak Lulus <br>";
        }
    }

    echo "<br>";

    $cars = array(
        array("Ioniq","Electric",70),
        array("Innova","Bensin",80),
        array("Air ev","Electric",90),
        array("Avanza","Bensin",65),
        array("Fortuner","Bensin",85)
    );

    foreach ($cars as $car) {
        $condition = ''; 
        if ($car[2] >= 60 && $car[2] < 70) {
            $condition = "kurang baik";
        } else if ($car[2] >= 70 && $car[2] < 80) {
            $condition = "baik";
        } else if ($car[2] >= 80 && $car[2] < 90) {
            $condition = "sangat baik";
        } else {
            $condition = "unggul";
        }
        echo "Merk: $car[0], Jenis: $car[1], Kondisi: $condition <br>";
    }
    
    ?>
</body>
</html>