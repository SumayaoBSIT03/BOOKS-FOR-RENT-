@extends('pages.base')

@section('content')

<h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;೭੧(❛〜❛✿)੭೨</h1>
<hr>
    <h1 class="text-light">&nbsp;&nbsp;&nbsp;&nbsp;Rent Data Entry</h1>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('bookRenteds/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="text-light" for="book_id">Select Book</label>
                  <select class="form-select" name="book_id" id="book_id">
                     <option hidden="true">Select Book</option>
                     <option selected disabled>Select book</option>
                     @foreach ($books as $bookId => $book)
                         <option value="{{$bookId}}">{{$book}}</option>
                     @endforeach
                  </select>
                  @error('book_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="text-light" for="customer_id">Select Customer</label>
                  <select class="form-select" name="customer_id" id="customer_id">
                     <option hidden="true">Select customer</option>
                     <option selected disabled>Select customer</option>
                     @foreach ($customers as $customerId => $customer)
                         <option value="{{$customerId}}">{{$customer}}</option>
                     @endforeach
                  </select>
                  @error('customer_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="text-light" for="date_rented">date_rented</label>
                    <input class="form-control" type="date" name="date_rented">
                    @error('date_rented')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label class="text-light" for="date_returned">date_returned</label>
                    <input class="form-control" type="date" name="date_returned">
                    @error('date_returned')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit" color="#ffffff">
                        Rent Entry</button>
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
