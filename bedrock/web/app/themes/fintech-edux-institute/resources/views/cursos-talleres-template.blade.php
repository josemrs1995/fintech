{{--
  Template Name: cursos-talleres plantilla
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
{{--@include('partials.content-page')--}}
    @include('partials.cursos-talleres-content')
  @endwhile
@endsection