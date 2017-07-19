<style>

    #contact-row {
        padding-top: 10px;
    }

</style>

<div class="navbar-not-fixed-top">

    <div class="container hero-container">


        <div id="social-buttons" class="col-lg-4 col-md-4 col-sm-4 hero-social" align="center">
            <div class="row">
                <a class="social-icon hvr-buzz" target="_blank"
                   href="https://profiles.wordpress.org/evgeniypoznyak#content-plugins">
                    <img id="wordpress-icon" src="{{url('/img/social_wordpress.png')}}"
                         title="WordPress"
                         height="50px" alt="">
                </a>

                <a class="social-icon hvr-buzz" target="_blank"
                   href="https://github.com/evgeniypoznyak">
                    <img id="github-icon" src="{{url('/img/social-github.png')}}" height="50px" title="GitHub"
                         alt="">
                </a>
                <a class="social-icon hvr-buzz"
                   target="_blank" href="https://www.linkedin.com/in/evgeniy-poznyak-6423b218/">
                    <img id="lindkin-icon" data-original-title="Linkedin"
                         src="{{url('/img/social_lindkin.png')}}"
                         height="50px" title="linkedin" alt=""></a>

                <a class="sotial-icon" href="@isset($resumeFile) {{$resumeFile}} @endisset"><img src="" alt="">
                    <button id="resume-icon" data-original-title="Download My Resume"
                            class="btn btn-warning hvr-buzz">RESUME
                    </button>
                </a>
                <a class="sotial-icon" href="#">


                    <button id="contact-icon" type="button" class="btn btn-success hvr-buzz"
                            data-toggle="modal" data-target="#contactModalBody"
                            data-whatever="Evgeniy">CONTACT</button>
{{--
                    <img src="" alt="">
                    <button id="contact-icon" data-original-title="Contact Me"
                            class="--}}{{--btn btn-warning--}}{{-- hvr-buzz">CONTACT
                    </button>--}}
                </a>
            </div>
            <script>


            </script>


            {{--
            <div class="row" id="contact-row">

            </div>--}}
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 hero-text" align="center">
            <div id="text-title-hero">Evgeniy Poznyak</div>
            <div  id="text-subtitle-hero">Web Developer</div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 hero-image" align="center">
            <img src="{{url('main-picture/poznye.png')}}" id="profile-pic">
        </div>
        {{--<div class="col-lg-4 col-md-4 col-sm-4 hero-image" align="center">
            <img class="img-responsive" src="{{url('main-picture/poznye.png')}}" id="profile-pic">
        </div>--}}

    </div>

</div>

