<?php

namespace App\View\Components\Links;

use App\Models\Link;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     *
     * @param Link $link
     * @return void
     */
    public function __construct(
        public Link $link
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
        return view('links.show');
    }
}
