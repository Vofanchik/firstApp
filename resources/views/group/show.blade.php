<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Document</title>
</head>
<body>
  <div>
    <a href="{{ route('group.index') }}"> К списку групп</a>
  </div>
  <br>
  
  <table border="1">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Start_from</th>
        <th>Is_active</th>
    </tr>
    <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->title }}</td>
        <td>{{ $group->start_from }}</td>
        <td>{{ $group->is_active }}</td>
    </tr>
  </table>

  <table border="1">
    <tr>
        <th>id</th>
        <th>group_id</th>
        <th>name</th>
        <th>surname</th>
    </tr>
    @foreach ($students as $student)
    <tr> 
             
          <td>{{ $student->id }} </td>
          <td>{{ $student->group_id }}</td>
          <td><a href="{{ route('student.show', ['student' => $student->id, 'group'=>$group->id]) }}" style="display:block;">{{ $student->name }}</a></td>
          <td>{{ $student->surname }}</td>
      
    </tr>
    @endforeach
  </table>
  <a  href="{{ route('student.create', $group) }}">Добавить студента в группу</a>
  <div>
  <a  href="{{ route('group.edit', $group->id) }}">Изменить группу</a>
  </div>
  <div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>