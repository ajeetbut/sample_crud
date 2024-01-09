<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1>All stars list</h1>
            <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
            <table class="table table-bordered table-striped">
               <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>delete</th>
                <th>update</th>
               </tr>
                @foreach ($data as $id => $star )
                <tr>
                    <td>{{$star->id}}</td>
                    <td> {{$star->name}}</td>
                    <td>{{$star->email}}</td>
                    <td>{{$star->age}}</td>
                    <td>{{$star->city}}</td>
                    <td><a href="{{route ('view.star',$star->id)}}" class="btn btn-primary btn-sm">View</a> </td>
                    <td><a href="{{route ('delete.star',$star->id)}}" class="btn btn-danger btn-sm">delete</a> </td>
                    <td><a href="{{route ('update.page',$star->id)}}" class="btn btn-warning btn-sm">update</a> </td>
                </tr>
                @endforeach
            </table>
            <div class="mt-5">
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
        </div>
    </div>
</body>
</html>



