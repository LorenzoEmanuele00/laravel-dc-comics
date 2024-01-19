@extends('layouts.app')

@section('content')
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Detail</a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modify</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection