
@extends('layouts.frontend.loginAppMain')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">

<!-- Scripts -->
<script src="http://127.0.0.1:8000/js/app.js" defer></script>

<style>
    body{
        background-image: url('dashboardcss/img/survey1.jpg');
			background-repeat:no-repeat;
            background-size:cover;
            height: 100%;
            overflow: hidden;

        padding-top: 15%;
        margin: 10%;
        margin-top: 80px;
       padding-top: 50px;
      max-height: 100%;
      max-width: 100%;
      object-fit: cover;

      background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    /* Font Colour */
    color:white;
    }
</style>

@section('content')

<div class="contents">
    <style>
        /* .col {
      height:100vh;
    } */
        img {
      display: block;
      max-width: 100%;
      height: auto;
    }

    #image_id {
      display: block;
      max-width: 100%;
      height: auto;
      max-width: 100%;
      object-fit: cover;
      /* height: calc(100vh - 400px); */
    }
    </style>

    <div class="font-sans text-gray-400 antialiased">
        <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-5 bg-gray-100"  id="image_id" style="color: #05083b;

/* background-image: url('dashboardcss/img/bm consult logo.jpg'); */
background-image: url('dashboardcss/img/survey2.jpg');
			background-repeat:no-repeat;
            background-size:cover;
            margin:100px;
            margin-top: 50px;
            width:1080px;
            object-fit: cover;
            max-width: 100%;
            height: auto;
        ">

            <div class="row " style="margin: 40px; padding:10px;">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg pull-right" style="margin-left: 20px; margin: 20px;


background-image: url('dashboardcss/img/survey.jpg');
			background-repeat:no-repeat;
            background-size:cover;
            /* margin:100px; */
            /* width:1080px; */
            object-fit: cover;
            max-width: 100%;
            height: auto;
            ">
                 <!-- Validation Errors -->
                 {{-- <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-weight: 900; font-size: 2rem;">{{ __(' Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-weight: 900; font-size: 2rem;">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-weight: 900; font-size: 2rem;">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-weight: 900; font-size: 2rem;">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form> --}}

                @if ($errors->any())
                <div class="error">
                    <div class="font-medium text-red-600" style="font-size: 2rem; font-weight: 600;">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li style="font-weight: 900; font-size: 2rem;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="name" style="color: #fff; font-weight: 900; font-size: 2rem;">
                            Name
                        </label>

                        <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full  @error('name') is-invalid @enderror" id="name" type="text" name="name" required="required" autofocus="autofocus">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <!-- Email Address -->
                    <!--color:05083b-->
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="email" style="color: #ffffff; font-weight: 900; font-size: 2rem;">
                            Email
                        </label>

                        <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="email" type="email" name="email" required="required">
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password" style="color: #ffffff; font-weight: 900; font-size: 2rem;">
                            Password
                        </label>

                        <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password_confirmation" style="color: #ffffff; font-weight: 900; font-size: 2rem;">
                            Confirm Password
                        </label>

                        <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://127.0.0.1:8000/login" style="color: #ffffff; font-weight: 900; font-size: 2rem;">
                            Already registered?
                        </a>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4 btn btn-lg " style="font-weight: 900; font-size: 2rem; border-radius:15px; ">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg " style="margin-left: 20px; margin: 20px;" > --}}

                {{-- <div class="h-100">
                    <img src="{{ asset('dashboardcss/img/bm consult logo.jpg') }}" alt="" class="h-100 img-responsive">

                </div> --}}
            {{-- </div> --}}
        </div>
    </div>

</div>




@stop
