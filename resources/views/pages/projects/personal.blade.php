<!-- Personal Experience -->

<style>


</style>

<!-- Professional Experience -->
<div class="accordion my-row-not-top" id="technical-skills">

    <div class="ui-accordion-header jumbotron" id="professionalIndex">Personal Experience</div>

    <div class="ui-accordion-content">
        @foreach($companiesPersonal as $companyName => $projects)


            <div class="accordion">
                <div class="ui-accordion-header">{{$companyName}}</div>

                <?php $count = 0;?>
                <div class="row ui-accordion-content my-accordion-content">


                    @foreach($projects as $project)
                        <div class="col-lg-6">   {{--  <div class="col-lg-3">--}} {{--<div class="col-lg-6">--}}
                            @include('pages.projects.project')
                        </div>
                    @endforeach



                </div>
            <?php
            // if only one in row - close div
            if ($count == 1){
            ?><!-- /.row -->
            </div><?php
            }?>

    </div>


    @endforeach


</div>

</div>

