@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <h1>Update Skill</h1>
            <form method="post" action="{{route('skills.destroy', $skill->id)}}">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

            </form>

            <hr>
            <form method="post" action="{{route('skills.update', $skill->id)}}" enctype="multipart/form-data">

            {{csrf_field()}}

            {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" value="{{$skill->title}}" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea rows="5" id="description"
                              name="description" class="form-control">{{$skill->description}}</textarea>
                </div>

                <div class="form-group">
                    <h4>Current Image:</h4>
                    <img style="max-height: 150px" class="img-responsive" id="current_image"
                         name="current_image" src="/img/{{$skill->picture}}" alt="">
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
                    <input type="number" value="{{$skill->order}}" class="form-control" id="order" name="order">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection
