<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Validate;

class Products extends Component
{
    public $products;

    #[Validate('required|min:3', as: 'Description')]
    public $description;

    #[Validate('required|integer|min:0', as: 'Quantity')]
    public $quantity;

    public $product_id;
    public $modal = false;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }

    function create()
    {
        $this->clearFields(); // limpiarCampos
        $this->openModal(); // abrirModal
    }
    function openModal() // abrirModal
    {
        $this->modal = true;
    }
    function closeModal() //cerrarModal
    {
        $this->modal = false;
    }
    function clearFields()
    {
        $this->description = '';
        $this->quantity = '';
        $this->product_id = '';
    }
    function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->product_id = $id;
        $this->description = $product->description;
        $this->quantity = $product->quantity;
        $this->openModal();
    }
    function delete($id) // borrar
    {
        Product::find($id)->delete();
    }
    function save() // guardar
    {
        $this->validate();

        Product::updateOrCreate(['id' => $this->product_id], [
            'description' => $this->description,
            'quantity' => $this->quantity,
        ]);

        $this->closeModal();
        $this->clearFields();
    }
}