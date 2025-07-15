<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
<form method="post" action="/groups/{{$group->id}}/students" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group col-md-4">
            <label for="surname">Фамилия:</label>
            <input type="text" class="form-control" name="surname">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Создать</button>
        </div>
    </div>
</form>
</body>
</html>
