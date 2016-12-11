@extends('layout')

@section('content')

    <a class="btn btn-info" href="{{ route('apartments.create') }}">ADD</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>CITIES</th>
            <th>PRICE</th>
            <th>ROOM NUMBERS</th>
            <th>METRIC AREA</th>
            <th>DESCRIPTION</th>
            <th>DELETE</th>
            <th>EDIT</th>
        </tr>
        @foreach($apartments as $apartment)
            <tr>
                <td>{{ $apartment->id }}</td>
                <td>{{ $apartment->cities->cities }}</td>
                <td>{{ $apartment->price }}</td>
                <td>{{ $apartment->room_numbers }}</td>
                <td>{{ $apartment->metric_area }}</td>
                <td>{{ $apartment->description }}</td>

                <td>
                    <form method="post" action="{{ route('apartments.destroy', $apartment->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                <td>

                    <a class="btn btn-info" href="{{ route('apartments.edit', $apartment->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </table>
{{$apartments->links()}}


@endsection