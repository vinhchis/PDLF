<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session View</title>
</head>
<body>
<h1>Session Tutorial</h1>
    <form action="Get" method="post">
    @csrf
    <div>
        UserName: 
    </div>
    <div>
        <input type="text" name="txtUser">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
    Session active: <span style="color: blue"> {{$ses}}</span>
    <hr>
    <a href="{{ url("Continue")}}">Continue</a>
    </form>
</body>

</html>