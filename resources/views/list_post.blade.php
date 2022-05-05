<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>VIEW</title>
    <style>
        table{
            margin-top:30px;
            border-collapse: collapse;
        }
        td{
            padding:18px;
            border:4px solid rgb(150, 15, 15);
        }
        th{
            padding:15px;
            border:4px solid rgb(25, 32, 29);
        }
        tr{
            padding:18px;
            border:4px solid rgb(255, 255, 255);
        }
    </style>
</head>
<body>
    <center>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>COURSE</th>
                <th>AGE</th>
                <th>CITY</th>
                <th>ACTION</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->course}}</td>
                    <td>{{$post->age}}</td>
                    <td>{{$post->city}}</td>
                    <td>
                        <button class="btn-info"><a href="/edit-post/{{$post->id}}">EDIT</a></button>
                        <button class="btn-danger"><a href="/delete-post/{{$post->id}}">DELETE</a></button>
                    </td>
                    
                </tr>
            @endforeach
        </table>
    </center>
    @if(Session::has('post_delete'))
    <br><br><center><b><span class="alert alert-success">{{Session::get('post_delete')}}</span></b></center>
    @endif
</body>
</html>