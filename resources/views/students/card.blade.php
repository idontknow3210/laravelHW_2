<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student card</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
            <span>Имя:</span>
            <span>{{$student->name}}</span>
        </div>
        <div class="form-group col-md-4">
            <span>Фамилия:</span>
            <span>{{$student->surname}}</span>
        </div>
    </div>
    <a href="/groups/{{$group->id}}"><< В группу</a>
</body>
</html>
