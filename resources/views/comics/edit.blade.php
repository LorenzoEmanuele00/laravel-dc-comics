@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3 w-50 mx-auto">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$comic->description}}"</textarea>
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb"  value="{{$comic->thumb}}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price"  value="{{$comic->price}}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series"  value="{{$comic->series}}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="sale_date" class="form-label">Sale_date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date"  value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type"  value="{{$comic->type}}">
            </div>

            <button class="btn btn-success mx-auto d-block mt-3" type="submit">Aggiorna</button>
        </form>
    </div>
@endsection