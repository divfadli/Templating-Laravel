<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Static</title>
</head>
<body>
    <h2>Buat Account Baru</h2>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="POST">
        @csrf
        <p>First name : </p>
        <input type="text" name="first_name">
        <p>Last name : </p>
        <input type="text" name="last_name">
        <p>Gender</p>
        <input type="radio" name="jk">Male<br>
        <input type="radio" name="jk">Female<br>
        <input type="radio" name="jk">Other<br>
        <p>Nationality</p>
        <select name="negara">
            <option value="1">Indonesia</option>
            <option value="2">Amerika</option>
            <option value="3">Inggris</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" name="bahasa">Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa">English<br>
        <input type="checkbox" name="bahasa">Other<br>
        <p>Bio</p>
        <textarea cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
