@extends('layouts.app')
<a href="{{ route('note.index') }}">Back home</a>

@section('content')
    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title"/>

        <label for="">Description</label>
        <input type="text" name="description" />

        <input type="submit" value="Create" />

    </form>
@endsection
