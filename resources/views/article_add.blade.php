@extends('layouts.app')

@section('content')
<form action="{{route('add_content.store')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="text">
            <input type="text" name="name">
            <input type="text" name="site">
            <input type="submit" name="submit">
        </form>
@endsection
