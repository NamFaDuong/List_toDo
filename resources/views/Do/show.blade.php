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
        margin: 50px auto;
        padding: 0px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container col-md-5">
        <div class="card-header">
            <h4>Create New Note</h4>
            <a href="/ToDo/create">New note</a>
        </div>
        @php
            $i=1;
        @endphp
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($dolist as $todo)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <th>{{ $todo->Title }}</th>
                        <th>{{ $todo->Description }}</th>
                        <th><a href="{{ url('/Todo/'. $todo->id .'/edit') }}"><button type="button" class="btn btn-primary">Edit</button></a></th>
                        <th>
                            <form action="{{ url('/Todo/'.$todo->id) }}" method="POST"> 
                                @csrf
                                @method('delete')
                                <input type="submit" value="Done" class="btn btn-danger">                                
                            </form>
                        </th>
                    </tr>
                @empty
                    <tr><h2><span style="color: red;">There is nothing to do today.🤣</span></h2></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>