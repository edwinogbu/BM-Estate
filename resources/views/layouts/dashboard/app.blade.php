@include('layouts.dashboard.partials.head')
<body>
	{{-- <div class="preloader">
		<div class="la-ball-pulse la-2x">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div> --}}
        @include('layouts.dashboard.partials.header')
        {{-- @include('layouts.dashboard.partials.sidebar') --}}
	<!--sideBarWrapper-->
        @yield('content')
@include('layouts.dashboard.partials.footer')
