@extends('layout')

@section('content')

    <form action="{{ route('apartments.update', $apartments->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="price">PRICE:</label>
            <input name="price" value="{{$apartments->price}}" type="text" class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="room_numbers">ROOM NUMBERS:</label>
            <input name="room_numbers" value="{{$apartments->room_numbers}}" type="text" class="form-control" id="room_numbers">
        </div>
        <div class="form-group">
            <label for="metric_area">METRIC AREA:</label>
            <input name="metric_area" value="{{$apartments->metric_area}}" type="text" class="form-control" id="metric_area">
        </div>
        <div class="form-group">
            <label for="description">DESCRIPTION:</label>
            <textarea name="description" class="form-control" rows="5" id="description">{{$apartments->description}}</textarea>
        </div>
        <div>
        <label for="cities">CITIES</label>

        <select name="cities_id" class="form-control">


        @foreach($cities as $city)
                @if($city->id==$apartments->cities_id)
                    <option selected="selected" value="{{$city->id}}">{{$city->cities}}</option>
                @else
                    <option value="{{$city->id}}">{{$city->cities}}</option>

              @endif

            @endforeach

        </select>
            </div>

        <button type="submit" class="btn btn-primary active">SAVE</button>
    </form>


@endsection