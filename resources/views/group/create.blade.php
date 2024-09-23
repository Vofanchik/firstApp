<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="btn btn-primary" href="{{ route('group.index') }}"> Назад</a>
  <br>

  <h3>Добавление новой группы</h3>
    <form action="{{ route('group.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="start_from">start_from</label>
        <input type="date" class="form-control" name="start_from" id="start_from">
      </div>
      <div class="form-group">
        <label for="is_active">is_active</label>
        <input type="hidden" id="is_active" name="is_active" value="0">
        <input type="checkbox" id="is_active" name="is_active" value="1" checked>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Создать группу</button>
    </form>
    <div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>