<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Body extends Component
{
    public $user;
    public $playlist;
    public $playlistTrack;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user, $playlist, $playlistTrack)
    {
        $this->user = $user;
        $this->playlist = $playlist;
        $this->playlistTrack = $playlistTrack;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.body');
    }
}
