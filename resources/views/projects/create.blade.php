@extends('layouts.app')

@section('content')
    <div class="container">
<div class="col-sm-8 blog-main">
    <h1>Create New Project</h1>
    <hr>
    <form method="post" action="{{route('projects.store')}}">

        {{csrf_field()}}


        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea rows="5" id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="details">Detail description:</label>
            <textarea rows="10" id="details" name="details" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="url">Site Url:</label>
            <textarea id="url" rows="1" name="url" class="form-control"></textarea>
        </div>

        <!-- Professional or PersoPostject -->
        <div class="form-group">
            <label for="professional">Professional or Personal Project:</label>
                <select id="professional" name="professional" class="form-control">
                    <option value="1">Professional</option>
                    <option value="0">Personal</option>
                </select>
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
