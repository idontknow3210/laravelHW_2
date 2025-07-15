<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <a href="/groups/{{$group->id}}/students/create">Добавить студента в группу</a>
    <ul class="d-none po-list" id="size">
        @foreach ($students as $student)
            <li name="size" value="{{ $student->id }}">
                <span><a href="/groups/{{$group->id}}/students/{{$student->id}}">{{ $student->name . " " . $student->surname }}</a></span>
            </li>
        @endforeach
    </ul>
    <a href="/groups"><< В группы</a>
</body>
</html>
