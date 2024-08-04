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
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      .container{
          top: 100px;
          padding: 25px;
          border-radius: 25px;
          border: 1px solid black;
      }
  </style>
</head>
<body>
    <div class="container col-md-4">
        <div class="card-header">
            <h4>Create New Note</h4>
        </div>
        <form method="POST" action="/Todo">
            @csrf

            <select name="us" id="us" class="form-select">
              <option value="">Please select user</option>
              @foreach ($accounts as $account)
                <option value="{{ $account->id }}">{{ $account->email }}</option>
              @endforeach
            </select>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">  
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <br>
              <textarea style="width: 100%;padding: 5px;" rows="5" id="description" name="description"></textarea>
            </div>
            <center>
                <input type="submit" value="Save" name="buttonSubmit" id="buttonSubmit" class="btn btn-primary">
                <input type="reset" value="Reset" name="buttonCancel" id="buttonCancel" class="btn btn-danger">
            </center>
          </form>
    </div>
</body>
</html>