@extends('layout')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>
        
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required>
        
        <button type="submit">Update</button>
    </form>
@endsection
