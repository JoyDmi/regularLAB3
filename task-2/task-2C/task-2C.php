<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2 (c)</title>
</head>
<body>
<form name="OPROS" action="opros.php" method="POST">
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
        <input name="age" type="number" min="18" max="127" value="18">
    </label>
    <br>
    <label>
        Salary
        <br>
        <input name="salary in rubles" type="number" min="0" max="10000000" value="100">
    </label>
    <br>
    <label>
        Country
        <br>
        <select name="country">
            <option value="ru">Russian Federation</option>
            <option value="ue">Ukraine</option>
            <option value="KZ">Kazakhstan</option>
            <option value="ot">other</option>
        </select>
    </label>
    <br> <br>
    <input type="submit" name="submitBtn" value="Submit"/>
</form>
</body>
</html>