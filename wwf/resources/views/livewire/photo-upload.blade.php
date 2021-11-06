<div>
    <h2 class="text-2xl font-extrabold text-gray-900 max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12">Upload</h2>
    <br>
    <form wire:submit.prevent="submit" >

        <input type="file" wire:model="photo">

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>
    <div class="container">
        @foreach($fileNames as $file)
            <img style="max-height: 150px" src="{{url('/storage/photos/'.$file)}}" alt="Image"/>

        @endforeach
    </div>
</div>
