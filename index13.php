<html>
<head>
    <title>Print with Do-While Loop</title>
</head>
<body>
    <h2>Print with Do-While Loop</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="endNum">Enter the ending number:</label><br>
        <input type="number" id="endNum" name="endNum" required><br><br>
        <input type="submit" value="Count">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $endNum = $_POST["endNum"];
        $i = 1;

        echo "<p>Counting from 1 to $endNum:</p>";

        do {
            echo $i."~";
            $i++;
        } while ($i <= $endNum);
    }
    ?>
</body>
</html>