<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'validate.php';

    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    validateState($errors, $_POST, 'state');
    validateGender($errors, $_POST, 'gender');

    if ($errors) {
        echo '<h3 style="color:red;">Invalid! Please correct the following errors:</h3>';
        foreach ($errors as $field => $error)
            echo "<p><b>$field</b>: $error</p>";
        include 'form.php';
    } else {
        echo '<h3 style="color:green;">Form submitted successfully with no errors.</h3>';
        echo '<hr><h4>Data Anda:</h4>';
        foreach ($_POST as $key => $value)
            echo htmlspecialchars("$key: $value") . "<br>";
    }
} else {
    include 'form.php';
}
?>
