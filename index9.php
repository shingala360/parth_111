<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="num1">Enter first number:</label><br>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Enter second number:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operation">Select operation:</label><br>
        <select id="operation" name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero!";
                }
                break;
            default:
                echo "Invalid operation!";
        }

        echo "<h1>Result: $result</h1>";
    }
    ?>
</body>
</html>