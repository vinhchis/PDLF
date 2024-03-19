<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        * {
            color: red;
        }
    </style>
    
</head>
<body>
    <h1>Items</h1>
        <table>
            <tr>
                <td>Result: {{$data}}</td>
            </tr>
        </table>

        <form action="Step2" method="post">
            @csrf
            <table>
                <tr>
                    <td align="right">Code: </td>
                    <td align="right">
                        <input type="text" name="txtCode">
                    </td>
                </tr>
                <tr>
                    <td align="right">Name: </td>
                    <td align="right">
                        <input type="text" name="txtName">
                    </td>
                </tr>
                    
                <tr>
                    <td align="right">Price: </td>
                    <td align="right">
                    <input type="text" name="txtPrice">
                    </td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td>
                    <input type="submit" name="btnSumit" value="Submit">
                    </td>
                </tr>    
            </table>
        </form>
</body>
</html>
