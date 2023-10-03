<?php
require_once("server.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the form
    $employee_id = $_POST['employee_id'];
    // Retrieve other form fields and sanitize them as needed

    // SQL query to insert data into the database
    $sql = "INSERT INTO employee_table (ID, Type, Fname, Sname, Email, Tel, Departman, SalaryPerTime, HoursPerMonth, AnnualSalary, YearSalary)
            VALUES ('$employee_id', 'EmployeeType', 'FirstName', 'LastName', 'Email', 0, 'Department', 0.0, 0.0, 0, 0)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form not submitted.";
}

$conn->close();
?>
