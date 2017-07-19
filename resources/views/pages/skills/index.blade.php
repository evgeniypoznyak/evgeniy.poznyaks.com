<!-- Technipagesills Panel -->


<div class="row accordion my-row" id="technical-skills">

        <div class="ui-accordion-header jumbotron" id="skillsIndex">My Skills</div>

<div class="ui-accordion-content" style="padding: 40px">

    @foreach($skills as $skill)

        @include('pages.skills.skill')

    @endforeach

</div>


</div>