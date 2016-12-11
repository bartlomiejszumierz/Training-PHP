@extends('layout')
@section('content')
    <form action="{{ route('sites.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content"></textarea>
        </div>

        <select name="category_id" class="form-control">

            @foreach($categories as $category)
                    <option value={{$category->id}}>{{$category->name}}</option>

            @endforeach
        </select>
        <button type="submit" class="btn btn-primary active">ADD PAGE</button>
    </form>
@endsection