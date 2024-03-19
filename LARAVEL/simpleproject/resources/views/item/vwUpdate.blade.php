<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<div class="container">
            <h1>Update the Item</h1>
            <form action="{{url("item/updateProcess/{$rs->Code}")}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="txtCode" value="{{$rs->Code}}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  id="name" name="txtName" value="{{$rs->Name}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="txtPrice" value="{{$rs->Price}}">
                </div>

                <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
            </form>
        </div>
</body>
</html>