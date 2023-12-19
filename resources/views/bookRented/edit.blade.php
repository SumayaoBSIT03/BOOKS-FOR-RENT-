
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteBookRentedModal" tabindex="-1" aria-labelledby="deleteBookRentedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBookRentedModalLabel">Delete Venue - {{$bookRented->place}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('bookRenteds/delete/' .$bookRented->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this Book?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <h1 class="sleepy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(=ↀωↀ=)</h1>

<hr>
<h1>&nbsp;&nbsp;&nbsp;Update Rent Status</h1>
<hr>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('bookRenteds/' .$bookRented->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="date_rented">date rented</label>
                <input type="date" name="date_rented" class="form-control" value="{{$bookRented->date_rented}}">
                @error('date_rented')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="date_returned">date returned</label>
                <input type="date" name="date_returned" class="form-control" value="{{$bookRented->date_returned}}">
                @error('date_returned')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteBookRentedModal">Delete Bookrented</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Bookrented</button>
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





{{-- @extends('pages.base')

@section('content')
    <h1>Update</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('bookRenteds/update')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="book_id">Select Book</label>
                  <select class="form-select" name="book_id" id="book_id">
                     <option value="{{$bookRented->book_id}}">{{$bookRented->book->id}}</option>
                     @foreach ($books as $bookId => $book)
                         <option value="{{$bookId}}">{{$book}}</option>
                     @endforeach
                  </select>
                  @error('book_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="customer_id">Select Customer</label>
                  <select class="form-select" name="customer_id" id="customer_id">
                  <option value="{{$bookRented->customer_id}}">{{$bookRented->customer->id}}</option>
                     @foreach ($customers as $customerId => $customer)
                         <option value="{{$customerId}}">{{$customer}}</option>
                     @endforeach
                  </select>
                  @error('customer_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="date_rented">date_rented</label>
                    <input class="form-control" type="date" name="date_rented" value="{{$bookRented->date_rented}}">
                    @error('date_rented')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="date_returned">date_returned</label>
                    <input class="form-control" type="date" name="date_returned" value="{{$bookRented->date_returned}}">
                    @error('date_returned')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add</button>
                  </div>
            </form>
        </div>
    </div>




@endsection --}}
