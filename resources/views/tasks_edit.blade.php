<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('tasks/edit')}}" method="update">
        @csrf
        <input type="text" name="title" id="">

        <input type="datetime-local" name="end-date" id="">

        <input type="submit" value="">
    </form>
</body>
</html>
