<div>
    <h2 class="text-2xl font-extrabold text-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">Upload</h2>
    <br>
    @if(Route::has('login'))
        @auth
    <form wire:submit.prevent="submit" >

        <input type="file" wire:model="photo">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title: </label>
        <span><input wire:model="title" required class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Title" id="title"></span>
        @error('photo') <span class="error">{{ $message }}</span> @enderror
        <br><br>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Save Photo</button>

    </form>
        @else
            <p>Please login to upload phpotos</p>
        @endauth
    @endif
    <div class="container">

            <h2 class="text-2xl font-extrabold text-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">OUR PHOTOS</h2>
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">
                <article>
                    <section class="mt-6 grid md:grid-cols-1 lg:grid-cols-4 gap-x-6 gap-y-8" >
            @foreach($fileNames as $file)

                <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                    <div class="relative w-full h-80 md:h-64 lg:h-44">
                        <img src="{{url('/storage/photos/'.$file)}}"
                             alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                             class="w-full h-full object-center object-cover">
                    </div>
                    <div class="px-3 py-4">
                        <h3 class="text-sm text-gray-500 pb-2">
                            <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" src="{{url('/storage/photos/'.$file)}}"target="_blank">
                                <span class="absolute inset-0"></span>
                                {{pathinfo($file, PATHINFO_FILENAME)}}
                            </a>
                        </h3>
                        <p
                            class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                            Click on the card, to see the original size</p>
                    </div>
                </article>


            @endforeach

                    </section>
                </article>
            </section>
    </div>
</div>
