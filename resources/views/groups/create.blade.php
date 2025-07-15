<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Group</title>
</head>
<body>
<form method="post" action="/groups" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12"></div>
        <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group col-md-4">
            <label for="start_from">Дата-время старта:</label>
            <input type="datetime-local" class="form-control" name="start_from">
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
