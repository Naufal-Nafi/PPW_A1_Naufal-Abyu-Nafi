<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h2>List Data</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php
            include'conn.php';
            $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
            $no = 1;
            foreach ($mahasiswa as $value) {
                echo" 
                <tr>
                    <td>$no</td>                
                    <td>".$value['nim']."</td>
                    <td>".$value['nama']."</td>
                    <td>".$value['alamat']."</td>
                </tr>
                ";
                $no++;
            }
        ?>
    </table>
</body>
</html>