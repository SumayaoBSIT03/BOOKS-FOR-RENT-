
@extends('pages.base')

@section('content')

<h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(⌐■_■)</h1>
<hr>
    <h1 class="text-light">Create Customer Bio</h1>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('customers/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label class="text-light" for="full_name">Full_name</label>
                    <input class="form-control" type="text" name="full_name">
                    @error('full_name')
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

                <div class="form-group mt-2">
                    <label class="text-light" for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label class="text-light" for="hobby">Hobby</label>
                    <input class="form-control" type="text" name="hobby">
                    @error('hobby')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add Customer</button>





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
