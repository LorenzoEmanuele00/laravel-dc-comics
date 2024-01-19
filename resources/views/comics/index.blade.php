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
                        <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}"><i class="fa-solid fa-info"></i></a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"" class="d-inline-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection