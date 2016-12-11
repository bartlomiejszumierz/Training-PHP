@extends('layout')

@section('content')

    <form action="{{ route('cars.update', $car->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME:</label>
            <input name="title" value="{{$car->name}}" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="engine">ENGINE:</label>
            <input name="title" value="{{$car->engine}}" type="text" class="form-control" id="engine">
        </div>
        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection
