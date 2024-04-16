
<html>
<head>
    <title>Display Tabular Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabular Data</h2>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SALARY</th>
    </tr>
    <?php
    // Sample multidimensional array with static values
    $data = array(
        array("1", "SONOO", "400000"),
        array("2", "JOHN", "500000"),
        array("3", "RAHUL" ,"300000"),
    );

    // Loop through the array to display data in tabular format
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

