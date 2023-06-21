<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        div.card {
        width: 400px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.712);
        text-align: center;
        }
    </style>
</head>
<body class="bg-secondary">
    <form action="/auth" method="post">
        @csrf
        <div class="container py-5 w-25">
            <div class="card mt-5 flex-fill" style="max-width: 20rem">
                <h2 class="text-center fw-bold mt-2">LOGIN</h2>
                <div class="form-outline mb-3 mt-2 form-control">
                    <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-outline mb-3 form-control">
                    <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" />
                </div>
                <center><button class="btn btn-primary mb-2"><input style="border: none" class="bg-transparent text-white" type="submit" value="Login"></button></center>
                <div class="text-center">
                    <p>Not a member? <a href="/daftar" class="text-decoration-none">Register</a></p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
