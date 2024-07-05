<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        // Menghubungkan ke database
        $conn = new mysqli("localhost", "root", "", "online_course");

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Mendapatkan ID course dari URL
        $course_id = $_GET['course_id'];

        // Memastikan bahwa ID course valid
        if ($course_id) {
            // Mengambil nama course dari database
            $course_sql = "SELECT title FROM courses WHERE course_id = ?";
            $stmt = $conn->prepare($course_sql);
            $stmt->bind_param("i", $course_id);
            $stmt->execute();
            $course_result = $stmt->get_result();

            if ($course_result->num_rows > 0) {
                $course_row = $course_result->fetch_assoc();
                echo "<h1 class='my-4'>Lessons untuk " . $course_row['title'] . "</h1>";

                // Mengambil daftar lessons dari database berdasarkan ID course
                // $lessons_sql = "SELECT title, lesson_file FROM lessons WHERE course_id = ?";
                $lessons_sql = "SELECT courses.title AS course_title, lessons.title AS lesson_title, lesson_file FROM courses JOIN lessons ON courses.course_id = lessons.course_id WHERE lessons.course_id = ?";
                $stmt = $conn->prepare($lessons_sql);
                $stmt->bind_param("i", $course_id);
                $stmt->execute();
                $lessons_result = $stmt->get_result();

                if ($lessons_result->num_rows > 0) {
                    echo "<table class='table table-striped'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th scope='col'>#</th>";
                    echo "<th scope='col'>Lesson Name</th>";
                    echo "<th scope='col'>File Pembelajaran</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    $counter = 1;
                    while ($lesson_row = $lessons_result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $counter++ . "</th>";
                        echo "<td>" . $lesson_row['lesson_title'] . "</td>";
                        echo "<td><a href='" . $lesson_row['lesson_file'] . "' target='_blank'>Klik disini</a></td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<div class='alert alert-warning' role='alert'>Tidak ada lessons untuk course ini.</div>";
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>Course tidak ditemukan.</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-danger' role='alert'>ID course tidak valid.</div>";
        }

        $conn->close();
        ?>
    </div>
    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>