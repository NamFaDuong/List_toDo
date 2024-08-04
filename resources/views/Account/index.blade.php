<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What I Do ??</title>
    <link rel="icon" href="/img/To-Do_icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
        width: 100%;
        background-color: #fff;
        margin: 20px auto;
        padding: 10px 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container col-md-5">
        <div class="card-header">
            <h4>Create New Note</h4>
            <a href="/Account/create">New Account</a>
        </div>
        @php
            $i=1;
        @endphp
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Emai</th>
                <th scope="col">Passowrd</th>
                <th scope="col">Edit</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <th>{{ $account->email }}</th>
                        @php
                            $input_password=$account->password;
                            $output_password = str_repeat ('*', strlen ($input_password));
                        @endphp
                        <th>{{ $output_password }}</th>
                        <th><a href="{{ url('/Account/'. $account->id .'/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a></th>
                        <th>
                            <form action="{{ url('/Account/'.$account->id) }}" method="POST"> 
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>