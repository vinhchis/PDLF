<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Create</title>
</head>
<body>
<div class="container">
            <h1>Create Product</h1>
            <form action="{{url("item/createProcess")}}" method="post">
                <input type="hidden" name="_token" value={{csrf_token()}}>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  id="name" name="txtName" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="txtPrice" placeholder="Enter product price">
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="txtCode" placeholder="Enter product code">
                </div>
                <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
            </form>
        </div>
</body>
</html>