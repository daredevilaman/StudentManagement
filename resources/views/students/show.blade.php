@extends('layout')

@section('content')
    <h1>Student Details</h1>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <a href="{{ route('students.index') }}" class="btn">Back to List</a>
@endsection
