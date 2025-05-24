<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <h1 class="my-4">List of Students</h1>
            <?php
                $query = "SELECT * FROM students";
                $result = mysqli_query($conn, $query);

                // Check if there are any students
                if (mysqli_num_rows($result) > 0) {
                    // Start table and headers
                    echo '<table class="table table-striped">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>Name</th>';
                    echo '<th>Email</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    // Fetch each student and display in table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '</tr>';
                    }

                        echo '</tbody>';
                        echo '</table>';
                } else {
                    echo "No students found.";
                    }

                // Close the connection
                 mysqli_close($conn);
            ?>
        </div>

        <!-- Optional Bootstrap JS CDN (for extra functionality like modals, dropdowns, etc.) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
