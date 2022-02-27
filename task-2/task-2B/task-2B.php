<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2B</title>
</head>
<body>
<form name="login" action="authorization.php" method="POST">
    <label>
        First Name
        <br>
        <input name="firstName">
    </label>
    <br>
    <label>
        Last Name
        <br>
        <input name="lastName">
    </label>
    <br>
    <label>
        Age
        <br>
        <input name="age" type="number" min="1" max="122" value="23">
    </label>
    <br>
    <input type="submit" name="loginBtn" value="Log In"/>
</form>
</body>
</html>