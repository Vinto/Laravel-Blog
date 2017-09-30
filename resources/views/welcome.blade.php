<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task->id}} {{ $task->body }}</li>
        @endforeach
    </ul>
</body>
</html>
