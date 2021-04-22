<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputPassword extends Component
{
    public $name;
    public $autocomplete;
    public $id;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $autocomplete
     * @param string $id
     * @param bool $disabled
     */
    public function __construct($name = '', $autocomplete = '', $id = '', $disabled = false)
    {
        $this->disabled = $disabled;
        $this->name = $name;
        $this->autocomplete = $autocomplete;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-password');
    }
}
