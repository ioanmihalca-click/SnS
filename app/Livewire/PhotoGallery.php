<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Photo;
use Livewire\WithPagination;

class PhotoGallery extends Component
{
    use WithPagination;

    public $perPage = 12;

    public function render()
    {
        $photos = Photo::latest()->paginate($this->perPage);

        return view('livewire.photo-gallery', [
            'photos' => $photos,
        ]);
    }
}