
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteBookModal" tabindex="-1" aria-labelledby="deleteBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBookModalLabel">Delete Book - {{$book->title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('books/delete/' .$book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this book?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
    
  <h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ﾐⓛᆽⓛﾐ)✧</h1>
<hr>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Book Info</h1>
<hr>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('books/' .$book->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" value="{{$book->title}}">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="genre">genre</label>
                <input type="text" name="genre" class="form-control" value="{{$book->genre}}">
                @error('genre')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteBookModal">Delete Book</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit book</button>
            </div>
        </form>
    </div>
</div>
<style>
    h1{
        color: rgb(255, 255, 255);
    }
    label{
        color:rgb(255, 255, 255)
    }
    hr{
        color: #00e1ff;
        border: 2px solid ;
        margin: 0 ;
        width:450px;
        visibility: visible;
    }
    .sleepy{
        color: #00f2ff;
    }
    </style>
@endsection
