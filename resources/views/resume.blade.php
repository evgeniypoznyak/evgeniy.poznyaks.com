@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <h1>Upload Resume</h1>
            <hr>
            <form method="post" action="{{route('resumestore')}}" enctype="multipart/form-data">

                {{csrf_field()}}

                <!-- Upload Picture -->
                <div class="form-group">
                    <label class="btn btn-success" for="resume">
                        <input id="resume" name="resume" type="file" style="display:none;"
                               onchange="$('#upload-file-info').html($(this).val());">
                        Upload Resume
                    </label>
                    <span class='label label-primary' style="font-size: 16px" id="upload-file-info"></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection