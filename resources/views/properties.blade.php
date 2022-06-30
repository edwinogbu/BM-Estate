@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel2')

  @include('layouts.frontend.partials.properties.title')
  @include('layouts.frontend.partials.properties.property_grid')

@stop
