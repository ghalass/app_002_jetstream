<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }
}