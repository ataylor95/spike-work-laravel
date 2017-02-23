<!DOCTYPE html>

<html>

<head>
    <title>DB</title>
</head>

<body>
    <h1>DB</h1>
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{$task->id}}">{{$task->body}}</a>
        </li>
    @endforeach

</body>

</html>
