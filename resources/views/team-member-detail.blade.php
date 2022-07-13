@extends('layouts.frontend.main')

@section('content')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.home.carousel')

  {{-- @include('layouts.frontend.partials.form-search') --}}
  @include('layouts.frontend.partials.single-team.intro')
  @include('layouts.frontend.partials.single-team.agent-details')

@stop

