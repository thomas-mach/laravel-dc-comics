@extends ('app')
@section('content')
<section>
    <div class="container">
        <p>this is create</p>
        <h2 class="fs-2">Add new comic</h2>
    </div>
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">

            {{-- Cross Site Request Forgering --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">TITLE</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url IMAGE</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">PRICE</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="9.99">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">SERIES</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Action Comics">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">SALE DATE</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="2018-10-10">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">SALE DATE</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Comic book">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description..."></textarea>
            </div>

            <button class="btn btn-primary">CREATE</button>
        </form>
    </div>
</section>
@endsection