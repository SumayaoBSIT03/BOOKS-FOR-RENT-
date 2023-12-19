
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteauthorModal" tabindex="-1" aria-labelledby="deleteauthorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteauthorModalLabel">Delete author - {{$author->full_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('authors/delete/' .$author->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this author?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(=🝦 ༝ 🝦=)</h1>
  <hr>
<cebter><h1>Update Author Bio</h1></center>
<hr>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('authors/' .$author->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" class="form-control" value="{{$author->full_name}}">
                @error('full_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="age">Age</label>
                <input type="numeric" name="age" class="form-control" value="{{$author->age}}">
                @error('age')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="pen_name">Pen Name</label>
                <input type="text" name="pen_name" class="form-control" value="{{$author->pen_name}}">
                @error('pen_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteauthorModal">Delete Author</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit author</button>
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
