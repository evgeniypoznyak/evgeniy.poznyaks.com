@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-8 blog-main">
            <div style="display: flex; padding-top: 10px">
            <h1>Update Project</h1>
                <div style="margin-top: auto; padding-left: 10px">
            <form method="post" action="{{route('projects.destroy', $project->id)}}">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
                </div>
            </div>
            <hr>
            <form method="post" action="{{route('projects.update', $project->id)}}">

                {{csrf_field()}}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" value="{{$project->title}}" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" class="form-control" value="{{$project->company}}" id="company" name="company">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea rows="5" id="description" name="description"
                              class="form-control">{{$project->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="details">Detail description:</label>
                    <textarea rows="10" id="details"
                              name="details" class="form-control">{{$project->details}}</textarea>
                </div>

                <div class="form-group">
                    <label for="url">Site Url:</label>
                    <textarea id="url" rows="1"
                              name="url" class="form-control">{{$project->url}}</textarea>
                </div>

                <!-- Professional or PersoPostject -->
                <div class="form-group">
                    <label for="professional">Professional or Personal Project:</label>
                    <select id="professional" name="professional" class="form-control">
                        <option value="1" @if($project->professional == '1') selected @endif>Professional</option>
                        <option value="0" @if($project->professional == '0') selected @endif>Personal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="order">Order:</label>
                    <input type="number" class="form-control" value="{{$project->order}}"
                           id="order" name="order">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

            @include('layouts.errors')

            <h1>Add New Picture</h1>
            <hr>
            <form method="post" action="{{route('pictures.store')}}" enctype="multipart/form-data">

                {{csrf_field()}}


                <div class="form-group" hidden>
                    <input type="text" class="form-control"
                           id="project_id" name="project_id" value="{{$project->id}}">
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
                        Select Picture
                    </label>
                    <span class='label label-primary' style="font-size: 16px" id="upload-file-info"></span>
                </div>


                <div class="form-group">
                    <label for="order">Order:</label>
                    <input type="number" class="form-control" id="order" name="order">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Upload Picture</button>
                </div>

            </form>
            @include('layouts.errors')
        </div>

        <div class="col-sm-4">
            <h3>Pictures:</h3>
            @foreach($project->pictures as $picture)
                <hr>
                <div><img class="img-responsive" src="/img/{{$picture->picture}}" height="200px" alt=""></div>

                <div style="display: flex; padding-top: 10px">
                    <span style="padding-right: 10px">
                        <a href="{{route('pictures.edit', $picture->id)}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    </span>

                    <form method="post" action="{{route('pictures.destroy', $picture->id)}}">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                    <div style="padding-left: 10px">Order: {{$picture->order}}</div>
                </div>
            @endforeach



            @include('layouts.errors')

        </div>


    </div>
@endsection