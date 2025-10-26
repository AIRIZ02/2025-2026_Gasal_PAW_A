<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Data Pribadi</h2>

    <form action="processData.php" method="POST">

        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"
            value="<?php echo htmlspecialchars($_POST['surname'] ?? '') ?>"><br>
        <?php if (isset($errors['surname'])) echo "<span style='color:red'>{$errors['surname']}</span><br>"; ?>
        <br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email"
            value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>"><br>
        <?php if (isset($errors['email'])) echo "<span style='color:red'>{$errors['email']}</span><br>"; ?>
        <br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <?php if (isset($errors['password'])) echo "<span style='color:red'>{$errors['password']}</span><br>"; ?>
        <br>

        <label for="address">Street Address:</label><br>
        <textarea id="address" name="address" rows="3" cols="30"><?php echo htmlspecialchars($_POST['address'] ?? '') ?></textarea><br><br>

        <label for="state">State:</label><br>
        <select id="state" name="state">
            <option value="">-- Pilih State --</option>
            <?php 
            $states = ["New South Wales","Victoria","Queensland","Western Australia","Tasmania"];
            $selected = $_POST['state'] ?? '';
            foreach ($states as $s) {
                $sel = ($s == $selected) ? 'selected' : '';
                echo "<option value='$s' $sel>$s</option>";
            }
            ?>
        </select><br>
        <?php if (isset($errors['state'])) echo "<span style='color:red'>{$errors['state']}</span><br>"; ?>
        <br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male"
            <?php if (($_POST['gender'] ?? '') == 'Male') echo 'checked'; ?>>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female"
            <?php if (($_POST['gender'] ?? '') == 'Female') echo 'checked'; ?>>
        <label for="female">Female</label><br>
        <?php if (isset($errors['gender'])) echo "<span style='color:red'>{$errors['gender']}</span><br>"; ?>
        <br>

        <input type="checkbox" id="vegetarian" name="vegetarian" value="Yes"
            <?php if (isset($_POST['vegetarian'])) echo 'checked'; ?>>
        <label for="vegetarian">Vegetarian?</label><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>


</body>
</html>