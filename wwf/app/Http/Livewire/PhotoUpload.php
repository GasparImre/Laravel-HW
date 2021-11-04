<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;


class PhotoUpload extends Component
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $fileNames = [];

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:12288',
        ]);
        $name = $this->photo->getClientOriginalName();
        dd($this->photo);
        $this->photo->storePubliclyAs('images', $name);
    }

    public function mount()
    {
        $path = public_path('/images');
        $files = File::allFiles($path);
        foreach($files as $file) {
            $mimeType=mime_content_type($file->getRealPath())??'application/octet-stream';
            $mime_class=explode('/',$mimeType)[0];
            if( in_array($mime_class,['image'])) {
                array_push($this->fileNames, pathinfo($file, PATHINFO_BASENAME));
            }
        }
    }


    public function render()
    {
        return view('livewire.photo-upload');
    }
}
