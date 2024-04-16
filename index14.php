
<html>
<head>
    <title>Country City Dropdown</title>
</head>
<body>

<form>
    <label for="country">Choose a country:</label>
    <select id="country" name="country">
        <option value="">Select</option>
        <?php
        // Sample list of countries (you can replace it with your own data source)
        $countries = array("USA", "CANADA", "UK", "AUSTRALIA", "INDIA");

        // Generate dropdown options for countries
        foreach ($countries as $country) {
            echo "<option value='$country'>$country</option>";
        }
        ?>
    </select>

    <label for="city">Choose a city:</label>
    <select id="city" name="city">
        <option value="">Select country first</option>
    </select>
</form>

<script>
    // City data based on countries
    var citiesByCountry = {
        "USA": ["New York", "Los Angeles", "Chicago"],
        "CANADA": ["Toronto", "Vancouver", "Montreal"],
        "UK": ["London", "Manchester", "Birmingham"],
        "AUSTRALIA": ["Sydney", "Melbourne", "Brisbane"],
       "INDIA":["Rajkot", "Ahmedabad", "Surat"],
    };

    // Function to populate city dropdown based on selected country
    document.getElementById("country").addEventListener("change", function() {
        var country = this.value;
        var cityDropdown = document.getElementById("city");
        cityDropdown.innerHTML = "<option value=''>Select</option>"; // Reset city dropdown

        if (country !== "") {
            var cities = citiesByCountry[country];
            cities.forEach(function(city) {
                var option = document.createElement("option");
                option.text = city;
                option.value = city;
                cityDropdown.appendChild(option);
            });
        }
    });
</script>

</body>
</html>

