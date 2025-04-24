<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is task</h1>
        <ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }} - {{ $task->description }}
            <a href="{{ route('tasks.show', $task->id) }}">view</a>
        </li>
    @endforeach
    </ul>

</body>
</html>