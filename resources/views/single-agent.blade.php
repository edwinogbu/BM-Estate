@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')

  @include('layouts.frontend.partials.form-search')
  @include('layouts.frontend.partials.single-agent.intro')
  @include('layouts.frontend.partials.single-agent.agent-details')

@stop

