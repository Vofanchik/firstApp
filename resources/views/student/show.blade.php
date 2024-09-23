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
  <a href="{{ route('group.show', $group->id) }}"> К списку студентов группы {{ $group->id }}</a>
  
  <table border="1">
    <tr>
      <th>id</th>
      <th>group_id</th>
      <th>group_title</th>
      <th>name</th>
      <th>surname</th>
    </tr>
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->group_id }}</td>
        <td><a href="{{ route('group.show', ['id'=>$group->id]) }}" style="display:block;">{{ $group_title }}</a></td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->surname }}</td>
    </tr>
  </table>
  <div>
    <a href="{{ route('student.edit', ['student' => $student, 'group' => $group]) }}"> редактировать группу студента</a>
  </div>
    <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>