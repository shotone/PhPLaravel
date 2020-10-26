@extends('home')

<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
@section('content') @show
<h1>The table element</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>position</th>
        <th>phone</th>
        <th>status</th>
        <th>edit</th>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->username}}</td>
            <td>{{$employee->position}}</td>
            <td>{{$employee->phone}}</td>
            @if($employee->is_hired == true)
                <td>აყვანილია</td>
            @else
                <td>არ არის აყვანილი</td>
            @endif
            <td><a href="{{url('edit', $employee->id)}}">განახლება</a></td>
        </tr>

    @endforeach

</table>

</body>
</html>
