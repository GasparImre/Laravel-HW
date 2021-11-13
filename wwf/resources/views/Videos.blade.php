@extends('welcome')
@section("title") Videos @endsection
@section('content')
    <h2 class="text-4xl"> Videos about the WWF!</h2>

{{--    <div class="grid grid-cols-2 gap-4 space-x-8 flex">--}}
{{--        <div class="flex-1 embed-responsive-16by9">--}}
{{--            <iframe class="embed-responsive-item" src="{{URL::asset("/images/Videos/what-does-wwf-do-wwf.mp4")}}" allowfullscreen></iframe>--}}
{{--            <p class="font-serif"> The first video about the WWF and what they do in general.</p>--}}
{{--        </div>--}}

{{--        <div class="flex-1 embed-responsive-16by9">--}}
{{--            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uQXo1RKN-gI" allowfullscreen></iframe>--}}
{{--            <p class="font-serif"> The second video is about the WWF's hístory and its inharritat</p>--}}
{{--        </div>--}}

{{--    </div>--}}

    <div class="ab grid-cols-3 px-10 gap-2">

        <div class=" relative flex justify-center items-center gap-2">
            <a class="cursor-pointer" href="#">
                <div class="hover:scale-105 transform transition-all duration-500">
                    <iframe class="hover:scale-105 transform transition-all duration-500" width="560" height="315" src="https://www.youtube.com/embed/uQXo1RKN-gI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </a>
        </div>
                <div class="relative flex justify-center items-center">
                    <a class="cursor-pointer" href="#">
                        <div class="hover:scale-105 transform transition-all duration-500">
                            <iframe class="h-30 rounded-lg" width="560" height="315"
                                    src="{{URL::asset("/images/Videos/what-does-wwf-do-wwf.mp4")}}"frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen/>
                        </div>
                    </a>
                </div>
    </div>
@endsection
