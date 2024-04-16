<html>
<head>
    <title>Right-Half Pyramid Pattern</title>
</head>
<body>
    <h2>Right-Half Pyramid Pattern</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numRows">Enter number of rows:</label><br>
        <input type="number" id="numRows" name="numRows" required><br><br>
        <input type="submit" value="Generate Pattern">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numRows = $_POST["numRows"];

        for ($i = 1; $i <= $numRows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>