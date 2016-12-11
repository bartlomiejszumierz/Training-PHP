@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ENGINE</th>
            <th>USUN</th>
            <th>EDYTUJ</th>
        </tr>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name  }}</td>
                <td>{{ $car->engine  }}</td>
                <td>
                    <form method="post" action="{{ route('cars.destroy', $car->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                <td>

                    <a class="btn btn-info" href="{{ route('cars.edit', $car->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </table>
    {{$cars->links()}}