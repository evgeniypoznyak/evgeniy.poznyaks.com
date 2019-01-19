{{--Skill--}}



<div class="skillItemContent">

    <div class="imageSection">
        <div class="cardImageWrapper">
            <img class="cardImage" src="img/{{$skill->picture}}" alt="SKILL IMAGE" >
        </div>
    </div>

    <div class="divider"></div>

    <div class="bodySection">
        <div class="h4">
            {{$skill->title}}
        </div>
        <div class="contentDescription">
            {!! $skill->description !!}
        </div>
    </div>

</div>
