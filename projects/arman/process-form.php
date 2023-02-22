<?php
// Retrieve the form data
$company = $_POST['company'];
$bus = $_POST['bus'];
$category = $_POST['category'];
$cost = $_POST['cost'];

// Perform some basic validation
if (empty($company) || empty($bus) || empty($category) || empty($cost)) {
    die("Please fill in all fields.");
}

// Store the data in a database or file
// Replace this with your own code to store the data
$file = fopen("data.csv", "a");
fputcsv($file, array($company, $bus, $category, $cost));
fclose($file);

// Display a success message to the user
echo "Form submitted successfully!";
?>
