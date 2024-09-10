<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Playlist;

class PlaylistSlider extends Component
{
    public function render()
    {
        $playlists = Playlist::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('livewire.playlist-slider', [
            'playlists' => $playlists,
        ]);
    }
}