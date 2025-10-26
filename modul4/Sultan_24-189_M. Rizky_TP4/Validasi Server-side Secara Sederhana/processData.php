<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Posted data:</h3>
    <?php

    require 'validate.php';
    $errors = array();
    validateName($errors, $_POST, 'surname');
    if ($errors)
    {
        echo 'Errors:<br/>';
        foreach ($errors as $field => $error)
        echo "$field $error</br>";
    }
    else
        echo 'Data OK!';
    ?>


</body>
</html>
