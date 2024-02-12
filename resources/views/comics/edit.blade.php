@extends('layouts.app')

@section('main-content')
<section  class="form-container container w-50 mx-auto">
    <div class="row justify-content-center">
        <h3 class="m-3">Edit</h3>
        <form action="{{ route('comics.update', $comic->id ) }}" method="POST">
            @csrf
    
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title: </label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image Url:</label>
                <input type="text" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description: </label>
                <textarea type="text" name="description" id="description" class="form-control" rows=6> {{ $comic->description }} </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price: </label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series: </label>
                <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series  }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Edit</button>
        </form>
    </div>

</section>    
@endsection