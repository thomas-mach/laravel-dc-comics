@extends('app')
@section('content')

<div class="container-sm">
    <p>this is index blade</p>
    <div class="d-flex flex-wrap">
        @foreach($comics as $comic)

        <div class="d-flex flex-column">
            <a href="{{route('comics.show', $comic)}}">
                <img src="{{$comic->thumb}}" alt="xxx" width="200" height="200">
            </a>
            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('comics.edit',$comic) }}">Edit</a>
                <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-link link-danger">Trash</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection