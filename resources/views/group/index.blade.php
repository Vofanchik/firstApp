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
    <a href={{ route('group.create') }}>Создать группу</a>  
  </div>
  <br>
  
  <table border="1">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Start_from</th>
        <th>Is_active</th>
    </tr>
    @foreach ($groups as $group)
    <tr>
        <td>{{ $group->id }}</td>
        <td><a href="{{ route('group.show', ['id'=>$group->id]) }}" style="display:block;">{{ $group->title }}</a></td>
        <td>{{ $group->start_from }}</td>
        <td>{{ $group->is_active }}</td>
    </tr>
    @endforeach
</table>
<div>
  <a  href="{{ route('welcome') }}">На главную</a>
  </div>
</body>
</html>