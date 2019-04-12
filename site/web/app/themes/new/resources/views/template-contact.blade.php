{{--
  Template Name: Contact
--}}

@extends('layouts.app-min')

@section('content')
    <div class="container minContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row mt-5 mb-5">
    <h1>{!! App::title() !!}</h1>
    </div>
    <div class="row mt-5 mb-5">
    <div class="col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.301714851864!2d-122.28095048413368!3d37.85323021541371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857e629c864151%3A0x40a5f9f069ed1de5!2sRalph+Gracie+Berkeley+Jiu+Jitsu+Academy!5e0!3m2!1sen!2sus!4v1546228106490"
                        width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
    <div class="row description mb-5">

        <div class="col-lg-8 contactform">
    @include('partials.content-page')
</div>
  @endwhile
  <div class="col-lg-4 d-flex justify-content-center align-items-center">
  Ralph Gracie Jiu-Jitsu Academy<br />
                        1500 Ashby Ave<br />
                        Berkeley, CA 94703<br /><br /><br/>
    
    
                        (510) 486-8000<br />
                        info [at] ralphgracieberkeley.com<br/><br/>
  </div>
</div>

</div>
@endsection
