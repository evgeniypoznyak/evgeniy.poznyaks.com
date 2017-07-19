@extends('layouts.app')


@section('content')
    <div class="container">
        {{--<h1 class="header">My Skills</h1>--}}


        <!-- Technical skills Panel -->
        <div class="row" id="technical-skills">
            <div class="col-lg-12">
                <h1 class="page-header">My Skills</h1>
            </div>

            @foreach($skills as $skill)

                @include('skills.skill')

            @endforeach

        </div>

    </div>
@endsection