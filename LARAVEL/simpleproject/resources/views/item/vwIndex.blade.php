<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <h1>List Of Items</h1>
    <span><a href="{{ url("item/create")}}">Create new</a></span>
    <table border="1" class="table table-bordered">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Function</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item -> Code}}</td>
            <td>{{$item -> Name}}</td>
            <td>{{$item -> Price}}</td>
            <td>
                <a href="{{url("item/update/{$item->Code}")}}">Update</a> |
                <a href="{{url("item/delete/{$item->Code}")}}" onclick="return confirm('Are you sure to delete ?'); ">Delete</a>
            </td>
            
        </tr>
        @endforeach 
    </table>
</body>
</html>