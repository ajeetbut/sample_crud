<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addstar user form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update star data</h1>
                <form action="{{route('update.star', $data->id)}}" method="POST">
                  @csrf
                  @method('put')
                    <div class="mb-3">
                    <label class="form-lable">Name</label>
                    <input type="text" value="{{$data->name}}" class="form-control" name="username">
                   </div> 
                   <div class="mb-3">
                    <label class="form-lable">Email</label>
                    <input type="text" value="{{$data->email}}" class="form-control" name="useremail">
                   </div> 
                   <div class="mb-3">
                    <label class="form-lable">Age</label>
                    <input type="text" value="{{$data->age}}" class="form-control" name="userage">
                   </div> 
                   <div class="mb-3">
                    <label class="form-lable">City</label>
                    <input type="text" value="{{$data->city}}" class="form-control" name="usercity">
                   </div> 

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>