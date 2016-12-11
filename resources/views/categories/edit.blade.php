@extends('layout')

@section('content')

<form action="{{ route('categories.update', $category->id) }}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">TITLE:</label>
        <input name="name" value="{{$category->name}}" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary active">EDIT Category</button>
</form>



@endsection