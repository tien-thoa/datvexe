@extends('layouts.app')

@section('content')

 <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>gender</th>
        </tr>
@foreach($info as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->gender }}</td>
            <td><a href="edit_user/{{ $value->id }}">sửa</a></td>
        </tr>
        @endforeach
</table>








@endsection