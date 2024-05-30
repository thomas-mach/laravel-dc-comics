@extends('app')
@section('content')

<div class="container">
    <p>this is index blade</p>
    @foreach($comics as $comic)
    <a href="{{route('comics.show', $comic)}}">
        <img src="{{$comic->thumb}}" alt="xxx" width="200" height="200">
    </a>
    @endforeach
</div>
@endsection