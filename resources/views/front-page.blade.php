@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.front-page-hero')
    @include('partials.front-page-intro')
    @include('partials.content-portfolio')
    @include('partials.front-page-services')
    @include('partials.front-page-review')
    @include('partials.front-page-blog') 
    @include('partials.get-started')
  @endwhile
@endsection
