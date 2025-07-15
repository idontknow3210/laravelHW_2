<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groups</title>
</head>
<body>
    <a href="/groups/create">Создать группу</a>
    <ul class="d-none po-list" id="size">
        @foreach ($groups as $group)
            <li name="size" value="{{ $group->id }}">
                <span>Группа: <a href="/groups/{{$group->id}}">{{ $group->title }}</a></span>
                <span>Дата-время: {{ $group->start_from }}</span>
            </li>
        @endforeach
    </ul>
</body>
</html>
