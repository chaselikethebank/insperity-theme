@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  {!! get_the_posts_navigation() !!}
@endsection

<div class="flex flex-row">
    <div class="basis-1/4">01</div>
    <div class="basis-1/4">02</div>
    <div class="basis-1/2">03</div>
  </div>

@section('sidebar')
  @include('sections.sidebar')
@endsection

