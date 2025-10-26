<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Form Data Pribadi</h2>
    <form action="processData.php" method="POST">
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"
            value="<?php echo htmlspecialchars($_POST['surname'] ?? '') ?>"><br>
        <?php
        if (isset($errors['surname'])) {
            echo "<span style='color:red'>{$errors['surname']}</span><br>";
        }
        ?>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
