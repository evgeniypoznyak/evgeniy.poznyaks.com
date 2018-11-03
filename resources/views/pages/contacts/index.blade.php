@extends('layouts.master')

@section('content')


<div class="container">
    <div class="col-sm-8 blog-main">
        <h1>Contact Me</h1>
        <hr>
        <form method="post" action="{{route('contact.send')}}">

            {{csrf_field()}}

            @include('layouts.errors')

            <div class="form-group">
                <label for="name">Your Name:</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label>Email Address:</label>
                <input class="form-control"
                       type="email" required id="email" name="email">
            </div>

            <div class="form-group">
                <label for="company">Company Name (optional):</label>
                <input type="text" class="form-control" id="company" name="company">
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea required rows="10" cols="100"
                          class="form-control" id="message" name="message"
                         style="resize:none"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>



        </form>


    </div>


</div>
<hr>

@endsection