<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <a href={{ route('group.index') }}>Общий список групп</a>  

  <table border="1">
    <tr>
        <th>id</th>
        <th>group_id</th>
        <th>name</th>
        <th>surname</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->group_id }}</td>
        <td><a href="{{ route('student.show', ['student' => $student->id, 'group'=>$student->group->id]) }}" style="display:block;">{{ $student->name }}</a></td>
        <td>{{ $student->surname }}</td>
    </tr>
    @endforeach
</table>
<div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
  
</body>
</html>