@extends('layout.main')
@section('content')
<a href="{{route("/teacher/create/")}}">Add Teacher</a>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>School</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($teachers as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->salary }}</td>
                <td>{{ $c->school }}</td>
                <th>
                <a href="{{BASE_URL}}teacher/edit/{{$c->id }}/" class="fa fa-edit">
                        <button>Edit</button>
                    </a>
                    <a href="{{route("teacher/delete/")}}{{$c->id }}" class="fa fa-trash">
                        <button onclick="return confirm('Are you sure you want to delete this categories?');">Delete</button>
                    </a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
