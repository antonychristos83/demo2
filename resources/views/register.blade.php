<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADD</title>
    <style>
        .row{
            margin-top:30px;
            margin-left:600px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <input style="width:50%" class="form-control" type="text" name="name" placeholder="Full Name"><br>
            <input style="width:50%" class="form-control" type="email" name="email" placeholder="Email"><br>
            <input style="width:50%" class="form-control" type="password" name="password" placeholder="Password"><br>
            <input class="btn-success" type="submit" value="REGISTER">
        </div>
    </div>
    </form>
    {{-- @if(Session::has('post_add'))
    <br><br><center><b><span class="alert alert-success">{{Session::get('post_add')}}</span></b></center>
    @endif --}}
    
</body>
</html>