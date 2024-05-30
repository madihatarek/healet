@extends('layouts.main')
@section('content')
<!-- header section strats -->
    @include('includes.header')
  <!-- end header section -->
    <!-- slider section -->
    @include('includes.slider')
  <!-- end slider section -->

  <!-- shop section -->
    @include('includes.shopSection')
  <!-- end shop section -->

  <!-- about section -->
    @include('includes.aboutSection')
  <!-- end about section -->

  <!-- offer section -->
  @include('includes.offerSection')
  <!-- end offer section -->

  <!-- blog section -->
  @include('includes.blogSection')
  <!-- end blog section -->

  <!-- client section -->
    @include('includes.client')
  <!-- end client section -->
@endsection