@extends('layouts.layout')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class=" container-button card-body">
                          <h5 class="card-title text-center">Activty 2</h5>
                          <a href="{{ route('home.create') }}" class=" button-activity btn btn-primary btn-danger">Go</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class=" container-button card-body">
                          <h5 class="card-title text-center">Activty 4</h5>
                          <a href="{{ route('home.list') }}" class=" button-activity btn btn-primary">Go</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>

    </div>

@endsection
