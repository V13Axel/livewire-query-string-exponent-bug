<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class Example extends Component
{
    #[Url]
    public string $example = '';

    public function mount()
    {
        if (!$this->example) {
            return $this->redirect('/?example=123e5');
        }

        dd(
            "Livewire: " . $this->example,
            "Request: " .request('example')
        );
    }

    public function render()
    {
        return view('livewire.example');
    }
}
