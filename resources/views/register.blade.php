<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Forum</h2>

    <form action="{{Route('Input Data')}}" method="POST">
        @csrf
        <p>First Name : </p>
        <input type="text" name="Fname" id="fname" placeholder="First Name">
        
        <p>Last Name : </p>
        <input type="text" name="Lname" id="lname" placeholder="Last Name">
        
        <p>Gender : </p>
        <input type="radio" name="gender" id="male" value="Male">
        <label for="male">Male</label><br>
        
        <input type="radio" name="gender" id="female" value="Female">
        <label for="female">Female</label><br>
        
        <input type="radio" name="gender" id="other" value="Other">
        <label for="other">Other</label><br>

        <p>Nationality</p>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Thailand">Thailand</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
        </select>

        <p>Language Spoken : </p>
        <input type="checkbox" name="LSpoken[]" id="lspoken1" value="Indonesian">
        <label for="lspoken1">Indonesian</label><br>
        <input type="checkbox" name="LSpoken[]" id="lspoken2" value="English">
        <label for="lspoken2">English</label><br>
        <input type="checkbox" name="LSpoken[]" id="lspoken3" value="Other">
        <label for="lspoken3">Other</label><br>

        <p>Bio : </p>
        <textarea name="Bio" id="bio" placeholder="Your Bio Here..."></textarea><br>
        
        <button type="submit" class="btn btn-warning">Sign Up</button>
    </form>
</body>
</html>