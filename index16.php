
<html>
<head>
    <title>Search Element in Array</title>
</head>
<body>

<h2>Search Element in Array</h2>

<form method="post">
    <label for="element">Enter the element to search:</label><br>
    <input type="text" id="element" name="element"><br><br>
    <input type="submit" value="Search">
</form>

<?php
// Sample array
$numbers = array(10, 20, 30, 40, 50);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the search element from the form
    $search_element = $_POST["element"];

    // Flag to track if element is found
    $found = false;

    // Iterate through the array to search for the element
    foreach ($numbers as $number) {
        if ($number == $search_element) {
            $found = true;
            break; // If found, no need to continue searching
        }
    }

    // Display search result
    if ($found) {
        echo "Element $search_element found in the array.";
    } else {
        echo "Element $search_element not found in the array.";
    }
}
?>

</body>
</html>

