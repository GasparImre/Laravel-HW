{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}
@extends('welcome')
@section('content')

        <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
            <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                <div class="lg:w-1/2">
                    <div class="h-64 bg-cover lg:rounded-lg lg:h-full" ><img src="{{url('/images/iceland.jpg')}}"></div>
                </div>
                <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-3xl text-gray-800 font-bold">Welcome  <span class="text-red-600">Logged in</span> user</h2>
                    <p class="mt-4 text-gray-600">This website made by Imre Gáspár, it's just a HomeWork, so errors/issues can occur. I hope you will enjoy this site.</p>
                </div>
            </div>
        </div>

@endsection
{{--</x-app-layout>--}}
