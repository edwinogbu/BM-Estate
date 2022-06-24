@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')
  @include('layouts.frontend.partials.home.services')
  @include('layouts.frontend.partials.home.properties')
  @include('layouts.frontend.partials.agents')
  @include('layouts.frontend.partials.home.testemonials')

@stop
