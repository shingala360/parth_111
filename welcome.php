<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    <?php
        // Retrieve username and password from GET request
        $username = $_GET['username'];
        $password = $_GET['password'];

        // Check if username and password are correct
        if ($username === 'samir' && $password === '123456') {
            echo "<p>Welcome, $username!</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    ?>
</body>
</html>