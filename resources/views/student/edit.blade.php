<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <a href="{{ route('student.index') }}"> К списку студентов</a>
  <br>

  <h3>Редактирование группы студента</h3>
    <form action="{{ route('student.update', ['student' => $student, 'group' => $group]) }}" method="post">
      @csrf
      <div>
        <label for="title">group id</label>
        <input type="text" class="form-control" id="group_id" name="group_id" value="{{ $student->group->id }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Обновить группу</button>
    </form>
    <div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>