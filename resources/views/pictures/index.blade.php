@extends('layouts.app')


@section('content')
    <div class="container">

        @foreach($pictures as $picture)
            @include('pictures.picture')
        @endforeach

    </div>
@endsection