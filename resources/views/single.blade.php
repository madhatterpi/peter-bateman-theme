@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.content-single')
  @endwhile
  @include('partials.related-posts')
  @include('partials.get-started')
@endsection

