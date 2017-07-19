<div class="col-md-3 img-portfolio">
    <a href="{{route('pictures.edit', $picture->id)}}">
        <img class="img-responsive img-hover" src="/img/{{$picture->picture}}" alt="">
    </a>
    {{--<h3>--}}
        {{--<a href="/picture/{{$picture->id}}">--}}
            {{--{{$picture->title}}--}}
        {{--</a>--}}
    {{--</h3>--}}
    {{--<p> Description:--}}
        {{--{{$picture->description}}--}}
    {{--</p>--}}

    <p> Order: {{$picture->order}}
        Website: {{$picture->project->url}}
    </p>
    {{--<p class="blog-post-meta">--}}
        {{--Created at:--}}
        {{--{{$picture->created_at->toFormattedDateString()}}--}}

    {{--</p>--}}

</div><!-- /.blog-post -->