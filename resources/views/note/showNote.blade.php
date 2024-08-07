@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back Home</a>

<h1>{{ $note->title }}</h1>
<p> {{ $note->description }} </p>
@endsection
