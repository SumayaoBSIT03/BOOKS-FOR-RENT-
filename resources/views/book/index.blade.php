@extends('pages.base')

@section('content')

@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{url('/books/create')}}" class="btn btn-primary me-md-2" type="button">
        Add Book
    </a>
  </div>

<table class="table table-bordered table-dark table-sm">
    <thead>
      <th>id</th>
      <th>author</th>
      <th>title</th>
      <th>genre</th>
      <th>Edit</th>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
              <td>{{$book->id}}</td>
              <td>{{$book->author->full_name}}</td>
              <td>{{$book->title}}</td>
              <td>{{$book->genre}}</td>
              <td class="text-center">
                <a href="{{url('/books/'.$book->id)}}" class="btnn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
  .btn {
  margin-bottom: 20px;
}
</style>


@endsection
