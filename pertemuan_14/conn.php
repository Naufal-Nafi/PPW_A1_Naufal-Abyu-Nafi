<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "akademik";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    echo "Connected Succesfully <br>";

    $sql = "SELECT nim, nama, alamat FROM mahasiswa";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "NIM: ".$row["nim"]." -Name: ".$row["nama"]." -Alamat: ".$row["alamat"]."<br>";
        }
    }else{
        echo "0 results";
    }

    // mysqli_close($conn);

    ?>

</body>
</html>