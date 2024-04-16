<html>
<head>
    <title>Print with For Loop</title>
</head>
<body>
    <h2>Print with For Loop</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="startNum">Enter the starting number:</label><br>
        <input type="number" id="startNum" name="startNum" required><br>
        <label for="endNum">Enter the ending number:</label><br>
        <input type="number" id="endNum" name="endNum" required><br><br>
        <input type="submit" value="Count">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $startNum = $_POST["startNum"];
        $endNum = $_POST["endNum"];

        echo "<p>Counting from $startNum to $endNum:</p>";

        for ($i = $startNum; $i <= $endNum; $i++) {
            echo $i;
        }
    }
    ?>
</body>
</html>
    