<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoutOut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-color: #151419;">
    <div class="container-fluid p-5 d-flex justify-content-center">
        <img class="img-fluid" src="https://i.ibb.co/kD5Pd4y/logo-no-background.png" alt="ShoutOut">
    </div>

    <div>
        <p class="text-center text-light fs-3">Welcome to ShoutOut!</p>
    </div>

    <div class="d-flex justify-content-center">
        <a href="{{ route('login') }}" class="btn m-1" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">Login →</a>
        <a href="{{ route('register') }}" class="btn m-1" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">Register →</a>
    </div>

    <div class="container text-light">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            </ul>
            <p class="text-center">© 2023 ShoutOut</p>
        </footer>
    </div>
</body>

</html>