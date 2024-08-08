@extends('layouts.app')
<a href="{{ route('note.index') }}">Back home</a>

@section('content')
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title"/> <br>
            @error('title')
            <p style="color: red"> {{$message}} </p>
            @enderror

        <label for="">Description</label> <br>
        <input type="text" name="description" />
            @error('description')
            <p style="color: red"> {{$message}} </p>
            @enderror

        <input type="submit" value="Create" />

    </form>
@endsection
