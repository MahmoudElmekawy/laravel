<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravel Task 1</h1>
   @foreach ($Students as $student)
    <h3>{{$student}} </h3>  
    <br>
   @endforeach
</body>
</html>