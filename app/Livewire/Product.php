<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;

    public $products;
    public function mount()
    {
        $this->products = Product::all();
    }
    public function render()
    {
        return view('livewire.product', [
            'products' => Product::all()
        ]);
    }
}
