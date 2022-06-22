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
{{--

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="text-center" style="align-content: center; text-align: center;">
                <img src="{{ asset('dashboardcss/img/bm consult logo4.jpg') }} " class=" fill-current text-gray-500 text-center" alt="" style="max-width: 400px; max-height:200px; margin:20px; ">
            </div>
            <a href="/">
               <span style="color: #05083b;  font-weight: 900; font-size: 50px;">

                   B.M <span class="color-b"> CONSULTING

                   </span>
               </span> --}}
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            {{-- </a>
        </x-slot> --}}

        <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf --}}

            <!-- Email Address -->
            {{-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> --}}

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                {{-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> --}}
            {{-- </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



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
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->

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

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember" style="transform: scale(1.5); padding: 10px;">
                    <span class="ml-2 text-sm text-gray-600" style="font-weight: 900; font-size: 1.5rem; border-radius:15px; color:#ffffff;">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="font-weight: 900; font-size: 1.5rem; border-radius:15px; color:#ffffff;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4 btn btn-lg " style="font-weight: 900; font-size: 2rem; border-radius:15px;color:#ffffff;">
                            Login
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
