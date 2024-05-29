<div class="container">
    <p>this is index blade</p>
    <div class="row">
        @foreach($comics as $comic)
        <img src="{{$comic->thumb}}" alt="xxx" width="200" height="200">

        @endforeach
    </div>
</div>