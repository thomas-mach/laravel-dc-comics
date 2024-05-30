@extends ('app')
@section('content')
<section>
    <div class="container">
        <p>this is edit</p>
        <h2 class="fs-2">Add new comic</h2>
    </div>
    <div class="container">
        <form action="{{route('comics.update', $comic)}}" method="POST">

            {{-- Cross Site Request Forgering --}}
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">TITLE</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url IMAGE</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{$comic->thumb}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">PRICE</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="9.99" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">SERIES</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Action Comics" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">SALE DATE</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="2018-10-10" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">TYPE</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Comic book" value="{{$comic->type}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <textarea class="form-control" name="description" id="description" rows="10" placeholder="Description...">{{$comic->description}}</textarea>
            </div>

            <button class="btn btn-primary">EDIT</button>
        </form>
    </div>
</section>
@endsection