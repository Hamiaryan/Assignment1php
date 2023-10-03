<!DOCTYPE html>
<html>
<head>
    <title>Employee Portal</title>
    <link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
    <header>
        <!-- Header content with navigation and logo -->
    </header>
    <main>
        <h1>Employee Portal</h1>
        <h2>Employee Records</h2>
        <?php
        // Include the database connection code
        include 'database.php';

        // Retrieve and display employee records from the database
        $sql = "SELECT * FROM employee_records";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Employee Name</th><th>Hours Worked</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['employee_name'] . "</td><td>" . $row['hours_worked'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No employee records available.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </main>
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
