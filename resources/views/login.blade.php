<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body class="bg-dark text-light">
   <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h3 class="mb-5 text-center">
                DASHBOARD LOGIN
            </h3>
            <form action="/check" method="POST">
                @csrf
                <div class="mb-5">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-5">
                   <label for="password" class="form-label">Password</label>
                   <input type="password" class="form-control" name="password">
                </div>
                <div>
                    <button class="btn btn-success my-5">
                        LOGIN
                    </button>
                </div>
           </form>
        </div>
    </div>
   </div>
</body>
</html>