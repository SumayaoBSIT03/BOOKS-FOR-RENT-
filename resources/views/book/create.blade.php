@extends('pages.base')

@section('content')

<h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ง'̀-'́)ง</h1>
<hr>
    <h1 class="text-light">&nbsp;&nbsp;&nbsp;&nbsp;Add New Book</h1>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('books/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="text-light" for="author_id">Select Author</label>
                  <select class="form-select" name="author_id" id="author_id">
                     <option hidden="true">Select author</option>
                     <option selected disabled>Select author</option>
                     @foreach ($authors as $authorId => $author)
                         <option value="{{$authorId}}">{{$author}}</option>
                     @endforeach
                  </select>
                  @error('author_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="text-light" for="title">title</label>
                    <input class="form-control" type="text" name="title">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="text-light" for="genre">genre</label>
                    <input class="form-control" type="text" name="genre">
                    @error('genre')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Book</button>
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
        .cust-edit{
            color: rgb(255, 255, 255);
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
