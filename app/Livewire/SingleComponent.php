<?php

namespace App\Livewire;

use Livewire\Component;

class SingleComponent extends Component
{
    public string $style;
    public string $class;

    public function updateStyle($style)
    {
        $this->style = $style;
    }

    public function updateClass($class)
    {
        $this->class = $class;
    }

    public function resetProps()
    {
        $this->style = '';
        $this->class = '';
    }

    public function render()
    {
        return view('livewire.single-component')
            ->layout('layouts.app');
    }
}
