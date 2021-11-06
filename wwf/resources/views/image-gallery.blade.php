@extends('welcome')

@section('content')


    <h2 class="text-2xl font-extrabold text-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">OUR PHOTOS</h2>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">
        <article>
            <section class="mt-6 grid md:grid-cols-1 lg:grid-cols-4 gap-x-6 gap-y-8" >
            @if($images->count())
                @foreach($images as $image)

                <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <img src="/images/{{ $image->image }}"
                             alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                             class="w-full h-full object-center object-cover">
                    </div>
                    <div class="px-3 py-4">
                        <h3 class="text-sm text-gray-500 pb-2">
                            <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="/images/{{ $image->image }}"target="_blank">
                                <span class="absolute inset-0"></span>
                                {{$image->title}}
                            </a>
                        </h3>
                        <p
                            class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                            Click on the card, to see the original size</p>
                    </div>
                </article>


            @endforeach

            @endif

            </section>
</article>
</section>
    @if(Route::has('login'))
        @auth
            <livewire:photo-upload />
        @else
            <section class="mt-6 grid md:grid-cols-1 lg:grid-cols-4 gap-x-6 gap-y-8" >
                <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <p class="mt-4 text-gray-600">Please log in to upload photos</p>
                    </div>
                </article>
            </section>
        @endauth
    @endif
@endsection
