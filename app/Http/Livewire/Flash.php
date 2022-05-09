<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    public $colors = [
        'error' => 'bg-red-800',
        'success' => 'bg-green-800',
        'warning' => 'bg-orange-800',
        'info' => 'bg-blue-800',

    ];


    protected $listeners =  ['flash' => 'setFlashMessage'];

    public function setFlashMessage($message, $type) {

        $this->message = $message;
        $this->type = $type;


$this->dispatchBrowserEvent('flash');
    }
    public function render()
    {
        return view('livewire.flash');
    }
}
