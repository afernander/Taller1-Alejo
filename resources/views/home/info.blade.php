@extends('layouts.layout')

@section('content')
    <ul>
        <li>{{ $items->name }}</li>
        <li>{{ $items->address }}</li>
        <li>{{ $items->credit_card }}</li>
        <form action="{{ route('home.delete', $items->id) }}" method="post">
            @csrf
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Delete</button>
            </div>
        </form>
    </ul>

@endsection
