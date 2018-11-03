@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-sm-6 blog-main">


            @foreach($companiesPro as $companyName => $projects)

                <h1>{{$companyName}}</h1>

                @foreach($projects as $project)

                    @include('projects.project')

                @endforeach


            @endforeach




        </div><!-- /.blog-main -->
    </div>



    <div class="container">
        <div class="col-sm-6 blog-main">


            @foreach($companiesPersonal as $companyName => $projects)

                <h1>{{$companyName}}</h1>

                @foreach($projects as $project)

                    @include('projects.project')

                @endforeach


            @endforeach



        </div><!-- /.blog-main -->
    </div>


@endsection
