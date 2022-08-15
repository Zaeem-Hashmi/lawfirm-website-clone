<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Pannel</title>
    {{-- bootstrap css added  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="row " style="height: 100vh;">
            <div class="col-md-2 bg-dark d-flex flex-column">
                <a href="/admin" class="text-center py-2 mt-5 pt-5 text-light" style="text-decoration: none">HOME</a>
                <a href="/logout" class="text-center py-2 text-light" style="text-decoration: none">LOGOUt</a>
            </div>
            <div class="col-md-10 px-0">
                <h2 class="bg-dark text-light fw-normal px-3 py-3" style="font-family: 'Courier New', Courier, monospace">
                    Welcome To DASHBOARD
                </h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead class="table-dark">
                              <tr>
                                <td>NAME</td>
                                <td>Email</td>
                                <td>Subject</td>
                                <td>Action</td>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                  <tr>
                                    <td>{{$item->fname}} {{$item->lname}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->subject}}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">DElETE</a>
                                        <a href="#" class="btn btn-danger">VIEW</a>
                                    </td>
                                  </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>