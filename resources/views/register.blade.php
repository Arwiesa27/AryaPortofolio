<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR</title>
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
    <form action="/daftar/create" method="post">
        @csrf
        <div class="container py-5 w-25">
            <div class="card mt-5 flex-fill" style="max-width: 20rem">
                <h2 class="text-center fw-bold mt-2">DAFTAR</h2>
                <div class="form-outline mb-3 mt-2 form-control">
                    <input type="text" name="name" id="nama" class="form-control" placeholder="Nama" />
                </div>
                <div class="form-outline mb-3 mt-2 form-control">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-outline mb-3 form-control">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                </div>
                <center><button class="btn btn-primary mb-2"><input style="border: none" class="bg-transparent text-white" type="submit" value="Daftar"></button></center>
            </div>
        </div>
    </form>
</body>
</html>
