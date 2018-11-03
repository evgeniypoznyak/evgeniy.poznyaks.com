{{--Skill--}}

<div class="col-lg-2 col-md-3  col-sm-3 my-skill-column">
    <div class="panel panel-default" style="height: 370px">
        <div class="panel-heading" style="text-align: center">
                        <span class="fa-stack fa-4x" style="display: inline">

                               <img src="img/{{$skill->picture}}" class="img-responsive"
                                    style="max-height: 150px; display: inline;" alt="">

                        </span>
        </div>
        <div class="panel-body">
            <h4 align="center">{{$skill->title}}</h4>
            {!! $skill->description !!}
        </div>
    </div>
</div>