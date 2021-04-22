<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $disabled;
    public $value;
    public $type;
    public $name;
    public $autocomplete;
    public $class;
    public $id;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $class
     * @param string $value
     * @param string $autocomplete
     * @param string $id
     * @param string $type
     * @param bool $disabled
     */
    public function __construct($name = '',$class = '', $value = '', $autocomplete = '', $id = '', $type = '', $disabled = false)
    {
        $this->disabled = $disabled;
        $this->name = $name;
        $this->value = $value;
        $this->autocomplete = $autocomplete;
        $this->id = $id;
        $this->class = $class;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
