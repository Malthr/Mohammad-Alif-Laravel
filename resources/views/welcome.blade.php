<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p><span>First Name : </span>{{session('Fname')}}</p>
    <p><span>Last Name : </span>{{session('Lname')}}</p>
    <p><span>Gender : </span>{{session('Gender')}}</p>
    <p><span>Nationality : </span>{{session('Nationality')}}</p>
    <p><span>Language : </span>{{session('Language')}}</p>
    <p><span>About : </span>{{session('Biodata')}}</p>
    <a href="{{ Route('Ke Home') }}"><button type="button" class="btn btn-danger">Logout</button></a>
</body>
</html>