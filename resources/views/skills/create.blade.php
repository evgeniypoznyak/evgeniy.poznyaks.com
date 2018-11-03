@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 blog-main">
            <h1>Add New Skill</h1>
            <hr>
            <form method="post" action="{{route('skills.store')}}" enctype="multipart/form-data">

            {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea rows="10" id="description" name="description" class="form-control"></textarea>
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
                    <label for="order">Order: </label>
                    <input type="number" class="form-control" id="order" name="order">
                    <p>( suggested number: {{$skill->order+1}} )</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection