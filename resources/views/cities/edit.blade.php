@extends('layout')

@section('content')

    <form action="{{ route('cities.update', $cities->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cities">CITIES:</label>
            <input name="cities" value="{{$cities->cities}}" type="text" class="form-control" id="name">
        </div>

        <button type="submit" class="btn btn-primary active">SAVE</button>
    </form>


@endsection