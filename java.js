<?php
// Check if a form ID is set in the URL query parameter
$formId = isset($_GET['formId']) ? $_GET['formId'] : 'form1';  // Default form is 'form1'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Toggle</title>
    <style>
        .form {
            display: none;
        }
        .form.show {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Navigation Buttons -->
    <button onclick="location.href='?formId=form1'">Show Form 1</button>
    <button onclick="location.href='?formId=form2'">Show Form 2</button>
    <button onclick="location.href='?formId=form3'">Show Form 3</button>

    <form id="form1" class="form <?php if ($formId == 'form1') echo 'show'; ?>">
        <h2>Form 1</h2>
        <!-- Form 1 content here -->
        <input type="text" placeholder="Form 1 Input">
    </form>

    <form id="form2" class="form <?php if ($formId == 'form2') echo 'show'; ?>">
        <h2>Form 2</h2>
        <!-- Form 2 content here -->
        <input type="text" placeholder="Form 2 Input">
    </form>

    <form id="form3" class="form <?php if ($formId == 'form3') echo 'show'; ?>">
        <h2>Form 3</h2>
        <!-- Form 3 content here -->
        <input type="text" placeholder="Form 3 Input">
    </form>

</body>
</html>
