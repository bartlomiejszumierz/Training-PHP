@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>USUN</th>
            <th>EDYTUJ</th>
        </tr>
        @foreach($sites as $site)
            <tr>
                <td>{{ $site->id }}</td>
                <td>{{ $site->title  }}</td>
                <td>{{ $site->category->name }}</td>
                <td>
                    <form method="post" action="{{ route('sites.destroy', $site->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                <td>

                    <a class="btn btn-info" href="{{ route('sites.edit', $site->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </table>
{{$sites->links()}}


@endsection