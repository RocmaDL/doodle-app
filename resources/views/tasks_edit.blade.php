<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tasks/edit/{{$task->id}}" method="post">
        @csrf
        <input type="text" name="title" value="{{$task->title}}">

        <input type="datetime-local" name="end-date" id="" value="{{$task->end_date}}">

        <input type="submit" value="">
    </form>
</body>
</html>
