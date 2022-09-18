<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class Images extends Component
{
    public $images;
    public function render()
    {
        $this->images = Image::all();
        return view('livewire.images');
    }
}
