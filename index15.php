
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br><br>
    
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define an array to store submitted data
    $student_data = array();

    // Add submitted data to the array
    $student_data[] = $_POST["name"];
    $student_data[] = $_POST["email"];
    $student_data[] = $_POST["age"];

    // Display submitted data in a table format
    echo "<h2>Submitted Data:</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
    echo "<tr>";
    foreach ($student_data as $data) {
        echo "<td>$data</td>";
    }
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>

