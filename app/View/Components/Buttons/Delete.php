<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Delete extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $action
     * @param string $title
     * @return void
     */
    public function __construct(
        public string $action = '#',
        public string $title = 'DELETE'
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
        return view('components.buttons.delete');
    }
}
