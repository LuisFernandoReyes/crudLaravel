@extends('layouts.app')

@section('content')
<a href=" {{ route('note.index')}} ">Back Home</a>
<form action="{{ route('note.update', $note->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" value="{{ $note->title }}" />

    <label for="">Description</label>
    <input type="text" name="description" value=" {{ $note->description}}" />

    <input type="submit" value="Update">


</form>
@endsection
