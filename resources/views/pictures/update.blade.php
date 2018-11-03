@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <h1>Update Picture</h1>
            <form method="post" action="{{route('pictures.destroy', $picture->id)}}">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

            </form>

                <hr>
            <form method="post" action="{{route('pictures.update', $picture->id)}}" enctype="multipart/form-data">

            {{csrf_field()}}

            {{ method_field('PUT') }}

            <!-- Website Name -->

                <div class="form-group" hidden>
                    <input type="text" class="form-control"
                           value="{{$picture->project->id}}" id="project_id" name="project_id">
                </div>

                <h3>For: {{$picture->project->url}}</h3>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" value="{{$picture->title}}" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea rows="5" id="description"
                              name="description" class="form-control">{{$picture->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="current_image">Current Image:</label>
                    <img class="img-responsive" id="current_image"
                         name="current_image" src="/img/{{$picture->picture}}" alt="">
                </div>

                <!-- Upload Picture -->
                <div class="form-group">
                    <label class="btn btn-success" for="picture">
                        <input id="picture" name="picture" type="file" style="display:none;"
                               onchange="$('#upload-file-info').html($(this).val());" accept="image/*">
                        Upload Picture
                    </label>
                    <span class='label label-primary' style="font-size: 16px" id="upload-file-info"></span>
                </div>


                <div class="form-group">
                    <label for="order">Order:</label>
                    <input type="number" value="{{$picture->order}}" class="form-control" id="order" name="order">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection
