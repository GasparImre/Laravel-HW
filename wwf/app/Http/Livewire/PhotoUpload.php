<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Http\ValidationException;
use Illuminate\Support\Facades\DB;

class PhotoUpload extends Component
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $fileNames = [];
    public $titleNames = [];
    public $title;
    public function submit()
    {
        $this->validate([
            'photo' => 'image|max:12288',
        ]);
        $name = $this->photo->getClientOriginalName();
        $this->photo->storePubliclyAs('photos', $name);

        DB::table('image_gallery')->insert([
            'title'=>$this->title,
            'image'=>$this->photo,
        ]);
        session()->flash('message', __('Photo uploaded '));
    }

    public function mount()
    {
        $path = public_path('/storage/photos');
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
