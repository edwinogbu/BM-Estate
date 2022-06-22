@extends('layouts.frontend.main')

@section('content')

  @include('form-search')
  @include('home.carousel')
  @include('home.services')
  @include('home.properties')
  @include('agents')
  @include('home.testemonials')

@stop
