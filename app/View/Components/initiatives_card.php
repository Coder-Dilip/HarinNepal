<?php

namespace App\View\Components;

use Illuminate\View\Component;

class initiatives_card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $key="";
    public function __construct($keyElement)
    {
        //
    $this->key=$keyElement;
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.initiatives_card');
    }
}
