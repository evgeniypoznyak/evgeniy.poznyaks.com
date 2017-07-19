@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <h1>Upload New Picture</h1>
            <hr>
            <form method="post" action="{{route('pictures.store')}}" enctype="multipart/form-data">

            {{csrf_field()}}

            <!-- Website Name -->
                <div class="form-group">
                    <label for="professional">Website Name:</label>
                    <select id="project_id" name="project_id" class="form-control">
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->url}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea rows="5" id="description" name="description" class="form-control"></textarea>
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
                    <input type="number" class="form-control" id="order" name="order">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection
