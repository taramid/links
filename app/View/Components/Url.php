<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Url extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $href
     * @return void
     */
    public function __construct(
        public string $href = '#'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.url');
    }
}
