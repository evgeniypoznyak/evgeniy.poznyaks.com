{{--Skill--}}
<div class="col-md-3 col-sm-6">
    <a style="text-decoration: none" href="{{route('skills.edit', $skill->id)}}">
        <div class="panel panel-default" style="height: 400px">
            <div class="panel-heading" style="text-align: center">
                        <span class="fa-stack fa-4x" style="display: inline">

                               <img src="img/{{$skill->picture}}" class="img-responsive"
                                    style="max-height: 150px; display: inline;" alt="">

                        </span>
            </div>
            <div class="panel-body">
                <h4 align="center">{{$skill->title}}</h4>
                {!! $skill->description !!}
                <div>Order: {{$skill->order}}</div>
                <p class="blog-post-meta">
                    Created at:
                    {{$skill->created_at->toFormattedDateString()}}
                </p>

            </div>
        </div>
    </a>
</div>


{{--<div class="blog-post">--}}

{{--<a href="{{route('skills.edit', $skill->id)}}">--}}


{{--<h2 class="blog-post-title">--}}

{{--{{$skill->title}}--}}

{{--</h2>--}}

{{--</a>--}}
{{--<p class="blog-post-meta">--}}
{{--Created at:--}}
{{--{{$skill->created_at->toFormattedDateString()}}--}}
{{--</p>--}}

{{--<p> Description:--}}
{{--{{$skill->description}}--}}
{{--</p>--}}
{{--<p> Order:--}}
{{--{{$skill->order}}--}}
{{--</p>--}}

{{--<h3> Pictures: </h3>--}}

{{--<div>--}}
{{--<img src="img/{{$skill->picture}}" style="max-height: 150px" class="img-responsive" alt="">--}}
{{--</div>--}}

{{--</div><!-- /.blog-post -->--}}