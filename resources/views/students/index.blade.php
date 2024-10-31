@extends('layout')

@section('content')
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}" class="btn">Add New Student</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}">View</a>
                    <a href="{{ route('students.edit', $student) }}">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
