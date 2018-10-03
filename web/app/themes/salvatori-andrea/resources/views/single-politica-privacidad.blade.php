{{--
  Template Name: Pagina de politica-privacidad
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-politica-privacidad')
  @endwhile


@endsection
