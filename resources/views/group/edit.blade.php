<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <a href="{{ route('group.index') }}"> К списку групп</a>
  <br>

  <h3>Редактирование группы</h3>
    <form action="{{ route('group.update', $group->id) }}" method="post">
      @csrf
      <div>
        <label for="title">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $group->title }}" required>
      </div>
      <div>
        <label for="start_from">start_from</label>
        <input type="date" class="form-control" name="start_from" id="start_from" value="{{ $group->start_from }}">
      </div>
      <div>
        <label for="is_active">is_active</label>
        <input type="hidden" id="is_active" name="is_active" value="0">
        <input type="checkbox" id="is_active" name="is_active" value="1" checked>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Обновить группу</button>
    </form>
    <div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>