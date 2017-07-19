@extends('layouts.master')

@section('content')
    <style>


    </style>


    @include('components.navbar')

    @include('pages.contacts.modal')


    <div class="single-project-wrap">


        <div class="single-project-inner">

            <div class="container">    <!-- Portfolio Item Row -->
                <div class="row vertical-align">

                    <div class="col-md-8">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                               {{-- @for($i = 0; $i < $picturesCount; $i++)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"
                                        @if($i == 0) class="active" @endif></li>
                                @endfor--}}
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                               {{-- @foreach($pictures as $key => $project)

                                    <div class="item @if($key == 0) active @endif">
                                        <img class="img-responsive swipe-now" src="/img/{{$project->picture}}" alt="">
                                    </div>
                                @endforeach--}}

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Project Description</h3>

                        <p>{!! $project->details !!}</p>

                        <div style="text-align: right">
                            <a href="{{$project->url}}" target="_blank">{{$project->title}}</a>
                        </div>

                    </div>

                </div>
                                       <!-- /.row --></div>


        </div>


    </div>



@endsection



