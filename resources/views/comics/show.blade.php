@extends('app')
@section('content')
<p>this is show blade</p>
<section>
    <img src="{{$comic->thumb}}" alt="xxx" width="500" height="500">
    <div>{{$comic->description}}</div>
</section>
@endsection