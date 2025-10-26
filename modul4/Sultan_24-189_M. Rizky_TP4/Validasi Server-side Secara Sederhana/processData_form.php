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
    <!-- Textbox: Surname -->
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname" ><br><br>

    <!-- Textbox: Email -->
    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" <br><br>

    <!-- Password -->
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <!-- Textarea -->
    <label for="address">Street Address:</label><br>
    <textarea id="address" name="address" rows="3" cols="30"></textarea><br><br>

    <!-- Dropdown menu -->
    <label for="state">State:</label><br>
    <select id="state" name="state">
        <option value="">-- Pilih State --</option>
        <option value="New South Wales">New South Wales</option>
        <option value="Victoria">Victoria</option>
        <option value="Queensland">Queensland</option>
        <option value="Western Australia">Western Australia</option>
        <option value="Tasmania">Tasmania</option>
    </select><br><br>

    <!-- Hidden input -->
    <input type="hidden" name="country" value="Australia">

    <!-- Radio button: Gender -->
    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br><br>

    <!-- Checkbox: Vegetarian -->
    <input type="checkbox" id="vegetarian" name="vegetarian" value="Yes">
    <label for="vegetarian">Vegetarian?</label><br><br>

    <!-- Submit & Reset -->
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>
</body>
</html>
