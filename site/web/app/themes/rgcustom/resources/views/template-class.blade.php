{{--
  Template Name: Class Template
--}}
@extends('layouts.app-min')

@section('content')
<section id="classHero">
        <div class="jumbotron jumbotron-fluid mb-0">
        </div>
    </section>
    <div class="container classContent">
  @while(have_posts()) @php the_post() @endphp
    <div class="row position-relative">
    <h1 class="position-absolute">{!! App::title() !!}</h1>
    </div>
    <div class="row description">
        <div class="col-lg-8">
    @include('partials.content-page')
</div>
<div class="col-lg-4 sideBar"></div>
</div>
  @endwhile
</div>
@endsection
