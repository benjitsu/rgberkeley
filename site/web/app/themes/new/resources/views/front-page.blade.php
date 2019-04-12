@extends('layouts.app-min')

@section('content')
<main role="main">
    <section id="homeHero">
        <div class="jumbotron jumbotron-fluid">
        </div>
    </section>
    <section id="homePrograms">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Our Programs</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">Brazilian Jiu-Jitsu</div>
                </div>
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">Judo</div>
                </div>
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">Kids Martial Arts</div>
                </div>
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">No Gi Grappling</div>
                </div>
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">Wrestling</div>
                </div>
                <div class="col-4">
                    <div class="program"></div>
                    <div class="name">Mobility Training</div>
                </div>
            </div>
        </div>
    </section>
    <section id="homeBjj">
        <div>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 800 40" style="enable-background:new 0 0 800 40;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #1A1A1A;
                    }
                </style>
                <rect x="0" y="0" class="st0" width="800" height="40" />
                <polyline class="st1" points="800,0 800,40 0,40 " />
            </svg>

        </div>

        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h2>Brazilian Jiu-Jitsu is For Everyone</h2>
                        <p>Brazilian Jiu-Jitsu is martial art that focuses on leverage and control to defeat an
                            opponent,
                            whether in a competition or a self-defense situation. Jiu-Jitu is often referred to a human
                            chess,
                            as it requires the body and mind to work simultaneously in a technical battle against
                            another
                            person. For the body, Jiu-Jitsu is an excellent way to improve physical fitness, balance,
                            and
                            coordination. For the mind, Jiu-Jitsu helps to build confidence, focus, and reduce stress.</p>
                        <p>
                            Whether you are young or old, currently in shape or not, you can enjoy and benefit of
                            practicing
                            Jiu-Jitsu. Students at Ralph Gracie Berkeley practice Jiu-Jitsu for a variety of reasons.
                            Some
                            attend primarily to improve fitness and learn a new art form, while others train to compete
                            in
                            tournaments and test themselves against others. All students enjoy the camaraderie and
                            community
                            we’ve cultivated at the academy.
                        </p>
                    </div>
                    <div class="col-4 offset-1 sideImg"></div>
                </div>
            </div>
        </div>

        <div>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 800 40" style="enable-background:new 0 0 800 40;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #1A1A1A;
                    }
                </style>
                <rect class="st0" width="800" height="40" />
                <polyline class="st1" points="0,40 0,0 800,0 " />
            </svg>
        </div>
    </section>
    <section id="homeMeetus">
        <div class="container">
            <div class="row">
                <h2 class="mr-auto ml-auto">Come Meet Us</h2>
            </div>
            <div class="row">
                <div class="col-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.301714851864!2d-122.28095048413368!3d37.85323021541371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857e629c864151%3A0x40a5f9f069ed1de5!2sRalph+Gracie+Berkeley+Jiu+Jitsu+Academy!5e0!3m2!1sen!2sus!4v1546228106490"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-4 details d-flex justify-content-center align-items-center ">
                   <div class="mb-2">
                        Ralph Gracie Jiu-Jitsu Academy<br />
                        1500 Ashby Ave<br />
                        Berkeley, CA 94703<br /><br /><br/>
    
    
                        (510) 486-8000<br />
                        info [at] ralphgracieberkeley.com
                   </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.capture')
</main>
@endsection