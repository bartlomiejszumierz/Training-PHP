@extends('layout')

@section('content')

    <form action="add" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>



@endsection