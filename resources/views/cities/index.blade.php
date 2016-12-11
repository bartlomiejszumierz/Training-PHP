@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>CITIES</th>
            <th>USUN</th>
            <th>EDYTUJ</th>
        </tr>
        @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->cities  }}</td>

                <td>
                    <form method="post" action="{{ route('cities.destroy', $city->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                <td>

                    <a class="btn btn-info" href="{{ route('cities.edit', $city->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </table>
{{$cities->links()}}


@endsection