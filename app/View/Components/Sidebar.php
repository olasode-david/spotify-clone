<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $playlist;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
