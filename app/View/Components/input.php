<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $name;
    public $type;
    public $msg;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $name = null, $type = null, $msg = null, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->msg = $msg;
        $this->value = $value;
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
