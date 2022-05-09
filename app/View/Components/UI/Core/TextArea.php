<?php

namespace App\View\Components\UI\Core;

use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name, $label, $value;

    public function __construct($name=null, $label=null, $value=null)
    {
        //
        $this->name = $name??"";
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.core.text-area');
    }
}
