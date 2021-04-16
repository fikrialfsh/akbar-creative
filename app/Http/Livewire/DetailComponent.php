<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class DetailComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.detail-component',['product'=>$product])->layout('layouts.base');
    }
}
