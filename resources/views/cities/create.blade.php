@extends('layout')

@section('content')

    <form action="{{ route('cities.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">CITIES:</label>
            <input name="name" type="text" class="form-control" id="title">
        </div>
        <button type="submit" class="btn btn-primary active">ADD</button>
    </form>



@endsection