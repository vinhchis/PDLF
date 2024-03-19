<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple View</title>
    <style>
        * {
            color: red;
        }
    </style>
    
</head>
<body>
    <h2>Simple View</h2>
    <span>Submit your Works</span>


    <h2>Display with PHP (core)</h2>
    <ol>
        <?php
            foreach($fruits as $data):        
        ?>
            <li> <?= $data ?></li>
        <?php
            endforeach;
        ?>
    </ol>

    <h2>Display with PHP (Blade)</h2>
    <ol start="6">
        @php 
            foreach($fruits as $data):        
        @endphp
            <li> <?= $data ?></li>
        @php
            endforeach;
        @endphp
    </ol>

    <h2>Display with PHP (Blade Template)</h2>
    <ol start="11">
        @foreach($fruits as $data)  
        <li>  {{$data}} </li>
        @endforeach;
    </ol>



</body>
</html>