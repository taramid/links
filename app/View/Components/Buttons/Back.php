<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Back extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $href
     * @param string $title
     * @return void
     */
    public function __construct(
        public string $href = '#',
        public string $title = 'BACK'
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
        return view('components.buttons.back');
    }
}
