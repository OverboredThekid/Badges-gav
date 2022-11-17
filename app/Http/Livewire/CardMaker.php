<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Card_Details;
use Livewire\WithFileUploads;


class CardMaker extends Component
{
    use WithFileUploads;
    public $name, $email, $phone;


    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
  
        Card_Details::create($validatedData);
  
        return redirect()->to('/form');
    }



    public function render()
    {
        return view('livewire.card-maker')->layout('layouts.wizard');
    }
}
