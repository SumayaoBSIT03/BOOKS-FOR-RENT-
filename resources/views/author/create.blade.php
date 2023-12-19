
@extends('pages.base')

@section('content')

<h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ヾ(●ω●)ノ</h1>
<hr>
    <h1 class="text-light">&nbsp;&nbsp;&nbsp;Add New Author</h1>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('authors/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label class="text-light" for="full_name">Full name</label>
                    <input class="form-control" type="text" name="full_name">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="text-light" for="pen_name">Pen name</label>
                    <input class="form-control" type="text" name="pen_name">
                    @error('pen_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="text-light" for="age">age</label>
                    <input class="form-control" type="numeric" name="age">
                    @error('age')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add Author</button>

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
