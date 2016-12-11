@extends('layout')

@section('content')

    <form action="{{ route('apartments.update', $site->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">TITLE:</label>
            <input name="title" value="{{$site->title}}" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea name="content" class="form-control" rows="5" id="content">{{$site->content}}</textarea>
        </div>

        <select name="category_id" class="form-control">

            @foreach($categories as $category)
                @if($category->id==$site->category_id)
                    <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>

              @endif

            @endforeach
        </select>

        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection