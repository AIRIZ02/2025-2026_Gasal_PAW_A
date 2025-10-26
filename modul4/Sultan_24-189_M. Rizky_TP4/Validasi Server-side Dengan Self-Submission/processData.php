<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'validate.php';
    validateName($errors, $_POST, 'surname');

    if ($errors) {
        echo '<h3>Invalid! Correct the following errors:</h3>';
        foreach ($errors as $field => $error)
            echo "<p><b>$field</b>: $error</p>";
        include 'form.php';
    } else {
        echo '<h3>Form submitted successfully with no errors.</h3>';
        echo '<p>Surname: ' . htmlspecialchars($_POST['surname']) . '</p>';
    }
} else {
    include 'form.php';
}
?>
