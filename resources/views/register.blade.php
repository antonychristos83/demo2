<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADD</title>
    <style>
        a{
            text-decoration: none;
        }
        .row{
            margin-top:30px;
            margin-left:600px;
        }
    </style>
</head>
<body>
    <form action="{{Route('register-user')}}" method="post">
        @if(Session::has('Success'))
        <br><br><center><b><span class="alert alert-success">{{Session::get('Success')}}</span></b></center>
        @endif 
        @if(Session::has('failure'))
        <div class="alert alert-danger">{{Session::get('failure')}}</div>
        @endif
    @csrf
    <div class="row">
        <div class="col">
            <input style="width:50%" class="form-control" type="text" name="name" placeholder="Full Name"><br>
            <span class="text-danger">@error('name') {{$message}} @enderror</span>
            <input style="width:50%" class="form-control" type="email" name="email" placeholder="Email"><br>
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
            <input style="width:50%" class="form-control" type="password" name="password" placeholder="Password"><br>
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
            <input class="btn-success" type="submit" value="REGISTER">
            <a href="login">Already Registered ? Login here</a>
        </div>
    </div>
    </form>
   
</body>
</html>