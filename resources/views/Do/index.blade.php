<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What I Do ??</title> 
    <link rel="icon" href="/img/To-Do_icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
        width: 100%;
        background-color: #fff;
        margin: 50px auto;
        padding: 0px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    @php
        $i=1;
    @endphp

    <div class="container col-md-5">
        <div class="card-header" style="padding: 10px 10px 0px 10px;">
            <h4>What is my note ??</h4>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="{{ url('/ToDo/show?id='.$user->id ) }}"><button type="button" class="btn btn-primary">What I do ??</button></a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>