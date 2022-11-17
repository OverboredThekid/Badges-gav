<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Card_info;
use Livewire\WithFileUploads;

class CardForm extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $name, $email, $phone, $file, $name_split, $first_name, $last_name;
    public $successMessage = '';


    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:Card_infos',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $this->currentStep = 2;
    }


    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'file' => 'required|image|max:5000',
        ]);

        $validatedData['name'] = $this->file->store('files', 'public');
        session()->flash('message', 'File successfully Uploaded.');

        $name_split = explode (" ", $this->name);
        $first_name = $name_split[0];
        $last_name = !empty($name_split[1]) ? $name_split[1] : '';

        $this->currentStep = 3;
    }



    public function submitForm()
    {
        Card_info::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ])->addMedia($this->file)->toMediaCollection('worker_id');
        

        $this->successMessage = 'ID Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->file = '';
    }

    public function render()
    {
        return view('livewire.card-form')->layout('layouts.wizard');;
    }
}
