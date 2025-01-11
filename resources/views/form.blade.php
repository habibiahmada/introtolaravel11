<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up hateemel</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <p>Isi form dibawah ini</p>
    <form action="{{ route('welcome') }}">
        <label for="first-name">First Name :</label><br><br>
        <input type="text" name="first-name" id="first-name" required>
        <br><br>
        <label for="last-name">Last Name :</label><br><br>
        <input type="text" name="last-name" id="last-name" required>
        <br><br>
        <label for="gender">Gender :</label>
        <br><br>
        <input type="radio" name="gender" id="Male" required>
        <label for="Male">Male</label><br>
        <input type="radio" name="gender" id="Female" required>
        <label for="Female">Female</label>
        <br><br>
        <label for="nationality">Nationality</label><br><br>
       <select name="nationality" id="nationality" required>
        <option value="Indonesia">Indonesia</option>
            <option value="Amerika">Amerika</option>
            <option value="Inggris">Inggris</option>
       </select>
       <br><br>
       <label for="language" >Language-Spoken</label>
       <br><br>
       <input type="checkbox" name="language" id="indonesia" value="Indonesia">
       <label for="indonesia">Bahasa Indonesia</label><br>
       <input type="checkbox" name="language" id="english" value="english">
       <label for="english">English</label><br>
       <input type="checkbox" name="language" id="other" value="other">
       <label for="other">Other</label>
       <br><br>
       <label for="bio">Bio</label><br><br>
       <textarea name="bio" id="bio" cols="30" rows="10" required></textarea>
       <br><br>
       <input type="submit" value="Sign Up">
    </form>
</body>
</html>