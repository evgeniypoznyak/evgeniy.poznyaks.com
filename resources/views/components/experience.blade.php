<style>

</style>


<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header experience-header">{{$header}}</div>
    </div>
</div>


@if($header == 'Professional Experience')

    @component('components.expiriencecontent')
        @slot('projectLeft')
            Project 1
        @endslot
        @slot('projectLeftText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot
        @slot('projectRight')
            Project 2
        @endslot
        @slot('projectRightText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot
    @endcomponent


    @component('components.expiriencecontent')
        @slot('projectLeft')
            Project 3
        @endslot
        @slot('projectLeftText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot

        @slot('projectRight')
            Project 4
        @endslot
        @slot('projectRightText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot
    @endcomponent


@endif


@if($header == 'Personal Projects')
    @component('components.expiriencecontent')

        @slot('projectLeft')
            Project 1
        @endslot
        @slot('projectLeftText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot

        @slot('projectRight')
            Project 2
        @endslot
        @slot('projectRightText')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda deserunt, esse eum ipsam iusto obcaecati odit officiis.
            A adipisci aspernatur eligendi illum libero minus, nihil non optio
            provident repellendus voluptate.
        @endslot

    @endcomponent
@endif
