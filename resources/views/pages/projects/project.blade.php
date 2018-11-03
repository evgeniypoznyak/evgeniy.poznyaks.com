<div class="panel panel-primary">

    <div class="panel-heading">
        <a class="hvr-wobble-bottom" style="text-decoration: none; color: #FFFFFF"
           href="{{route('singleProject', $project->id) }}" target="_blank">{{$project->title}}
        </a></div>

    <div class="panel-body">
        <p>{!! $project->description !!}</p>
        <br>

        @if(isset($project->pictures->first()->picture))
            <a href="{{route('singleProject', $project->id) }}" target="_blank">
                <img class="img-responsive img-hover hvr-rotate project-image"
                     src="/img/{{$project->pictures->first()->picture}}"
                     title="{{$project->pictures->first()->description}}" alt="">
            </a>
        @endif
    </div>

</div>


