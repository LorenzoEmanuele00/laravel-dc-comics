@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="mb-3 w-50 mx-auto">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="sale_date" class="form-label">Sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3 w-50 mx-auto">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <button class="btn btn-success mx-auto d-block mt-3" type="submit">Salva</button>
    </div>
@endsection