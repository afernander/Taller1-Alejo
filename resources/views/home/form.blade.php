@extends('layouts.layout')

@section('content')
    <div class="container">
        <form  action="{{ route("home.store") }}" method="POST" class=" form-container container-form">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input name="name" type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Address</label>
              <input name="address" type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Credit Card</label>
              <input name="credit_card" type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
          </form>   
    </div>

@endsection
