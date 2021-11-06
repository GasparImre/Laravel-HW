@extends('welcome')
@section('content')
    <h4 class="text-xl font-semibold mb-2">Thanks for your feedback, we'll let you know our answer!</h4><br><br>
    <a href="{{route('contactus')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >Back to the Contact Page</button></a>
@endsection
