<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Artist;

class Artists extends Component
{
    public function render()
    {
        $artists = Artist::orderBy('order')->get();

        return view('livewire.artists', [
            'artists' => $artists,
        ]);
    }
}