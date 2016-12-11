@extends('layout')

@section('content')

<form action="{{ route('categories.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">TITLE:</label>
        <input name="name" type="text" class="form-control" id="title">
    </div>
    <button type="submit" class="btn btn-primary active">ADD Category</button>
</form>



@endsection