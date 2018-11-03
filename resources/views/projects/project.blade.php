<div class="blog-post">

    <a href="/projects/{{$project->id}}/edit">



        <h2 class="blog-post-title">

            {{$project->title}}

        </h2>

    </a>


    <p class="blog-post-meta">
        Created at:
        {{$project->created_at->toFormattedDateString()}}

    </p>

<p> Description:
    {{$project->description}}
</p>

<p> Detailed description:
    {{$project->details}}
</p>
<p> URL:
    {{$project->url}}
</p>
<p> Professional / Personal :
    {{$project->professional}}
</p>
<p> Order:
    {{$project->order}}
</p>

    <h3> Pictures: </h3>
<div class="container">

    <div class="col-lg-4">
    @foreach($project->pictures as $picture)

    <img class="img-responsive" src="img/{{$picture->picture}}"  style="padding: 10px;" alt="">

    @endforeach
    </div>
</div>

</div><!-- /.blog-post -->