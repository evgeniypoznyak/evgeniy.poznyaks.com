<!-- Technipagesills Panel -->
<style type="text/css">


</style>


<div class="row accordion my-row" id="technical-skills">

    <div class="ui-accordion-header jumbotron" id="skillsIndex">My Skills</div>

    <div class="ui-accordion-content">
        <div class="skillsWrapper">

            @foreach($skills as $skill)
                @include('pages.skills.skill')
            @endforeach

        </div>

    </div>


</div>
