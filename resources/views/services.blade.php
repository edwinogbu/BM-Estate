@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.services.service-intro')
  @include('layouts.frontend.partials.services.services-section')
  {{-- @include('layouts.frontend.partials.agents') --}}

@stop
