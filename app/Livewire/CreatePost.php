<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $form = [
        'title' => '',
        'description' => '',
    ];

    public $disableTextarea = true;

    public function save()
    {
        dd($this->form);
    }

    public function updatedFormTitle($value)
    {
        if($value)
            $this->disableTextarea = false;
    }

    public function render()
    {
        return view('livewire.create-post')->layout('layouts.app');
    }
}
