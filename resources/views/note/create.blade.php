@extends('layouts.app')
<a href="{{ route('note.index') }}">Back home</a>

@section('content')
    <form action="">
        <label>Title</label>
        <input type="text" />

        <label for="">Description</label>
        <input type="text" />

        <input type="submit" value="Create" />

    </form>
@endsection