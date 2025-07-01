<?php

namespace App\View\Components;

use App\Models\Profile;
use App\Models\Sosmed;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = [
            'profile' => Profile::first(),
            'kontak'  => Sosmed::first()
        ];
        return view('components.navbar', $data);
    }
}
