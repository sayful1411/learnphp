<?php
// Array of companies and their buses
$companies = array(
    "Company A" => array("Bus 1", "Bus 2", "Bus 3"),
    "Company B" => array("Bus 4", "Bus 5", "Bus 6"),
    "Company C" => array("Bus 7", "Bus 8", "Bus 9")
);

if (isset($_POST["company"])) {
    $selected_company = $_POST["company"];
    echo "Hello";
} else {
    $selected_company = null;
    echo "World";
}

if (isset($_POST["bus"])) {
    $selected_bus = $_POST["bus"];
    echo "How";
} else {
    $selected_bus = null;
    echo "Are";
}



// Get selected company and bus from the form
// if (isset($_POST["company"]) && isset($_POST["bus"])) {
//     $selected_company = $_POST["company"];
//     $selected_bus = $_POST["bus"];
// } else {
//     $selected_company = null;
//     $selected_bus = null;
// }

// Get selected cost category and cost from the form
if (isset($_POST["cost_category"]) && isset($_POST["cost"])) {
    $selected_cost_category = $_POST["cost_category"];
    $selected_cost = $_POST["cost"];
} else {
    $selected_cost_category = null;
    $selected_cost = null;
}

// Form submission handling
if (isset($_POST["submit"])) {
    // Process the form data here
    // ...
}

?>

<!-- HTML form -->
<form method="post" action="">
    <label for="company">Select a company:</label>
    <select id="company" name="company" onchange="this.form.submit()">
        <option value="">Select a company</option>
        <?php foreach ($companies as $company => $buses) { ?>
            <option value="<?php echo $company; ?>" <?php if ($selected_company == $company) { echo "selected"; } ?>><?php echo $company; ?></option>
        <?php } ?>
    </select>

    <?php if ($selected_company) { ?>
        <label for="bus">Select a bus:</label>
        <select id="bus" name="bus" onchange="this.form.submit()">
            <option value="">Select a bus</option>
            <?php foreach ($companies[$selected_company] as $bus) { ?>
                <option value="<?php echo $bus; ?>" <?php if ($selected_bus == $bus) { echo "selected"; } ?>><?php echo $bus; ?></option>
            <?php } ?>
        </select>
    <?php } ?>

    <?php if ($selected_bus) { ?>
        <label for="cost_category">Select a cost category:</label>
        <select id="cost_category" name="cost_category">
            <option value="">Select a cost category</option>
            <option value="Category 1" <?php if ($selected_cost_category == "Category 1") { echo "selected"; } ?>>Category 1</option>
            <option value="Category 2" <?php if ($selected_cost_category == "Category 2") { echo "selected"; } ?>>Category 2</option>
            <option value="Category 3" <?php if ($selected_cost_category == "Category 3") { echo "selected"; } ?>>Category 3</option>
        </select>
    <?php } ?>
        <label for="cost">Enter the cost:</label>
        <input type="text" id="cost" name="cost" value="<?php echo $selected_cost; ?>">

        <input type="submit" name="submit" value="Submit">
    
</form>